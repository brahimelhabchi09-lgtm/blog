<?php

namespace App\Controller;

use Admin;
use Core\Base\Controller;
use Database\Database;
use PDO;
use Reader;

class AuthController extends Controller {
    public function login(){
        return $this->view('auth.login');
    }
    public function profile(){
        return $this->view('auth.profile');
    }
    public function register(){
        return $this->view('auth.register');
    }
    public function logout(){
        session_destroy();
        header("Location: /login");
        exit();
    }

    public function submitRegister(){
        $err = false;
        $firstName = trim($_POST["firstName"] ?? '');
        $lastName = trim($_POST["lastName"] ?? '');
        $email = trim($_POST["email"] ?? '');
        $password = trim($_POST["password"] ?? '');
        $confirm_password = trim($_POST["confirm_password"] ?? '');
        
        $this->validationRegister($err, $firstName, $lastName, $email, $password, $confirm_password);

        if (!$err) {
            $query = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
            $stmt = Database::getConnection()->prepare($query);
            if ($stmt->execute([$firstName, $lastName, $email, password_hash($password, PASSWORD_BCRYPT)])) {
                unset($_SESSION['firstName'], $_SESSION['lastName'], $_SESSION['email'], $_SESSION['password'], $_SESSION['confirm_password']);
                $_SESSION['success'] = "Inscription réussie. Vous pouvez maintenant vous connecter.";
                header("Location: /login");
                exit();
            } else {
                $_SESSION['error'] = "Une erreur est survenue. Veuillez réessayer plus tard.";
            }
        }

        header("Location: /register");
        exit();


    }

    public function validationRegister(&$err, $firstName, $lastName, $email, $password, $confirm_password){
        $_SESSION['firstName'] = htmlspecialchars($firstName, ENT_QUOTES);
        $_SESSION['lastName'] = htmlspecialchars($lastName, ENT_QUOTES);
        $_SESSION['email'] = htmlspecialchars($email, ENT_QUOTES);
        $_SESSION['password'] = htmlspecialchars($password, ENT_QUOTES);
        $_SESSION['confirm_password'] = htmlspecialchars($confirm_password, ENT_QUOTES);

        if ($firstName === "") {
            $_SESSION['firstName-err'] = "Le nom est obligatoire.";
            $err = true;
        }

        if ($lastName === "") {
            $_SESSION['lastName-err'] = "Le nom est obligatoire.";
            $err = true;
        }

        if ($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['email-err'] = "Email invalide.";
            $err = true;
        }else{
            $query = "SELECT email FROM users WHERE email = ?";
            $stmt = Database::getConnection()->prepare($query);
            $stmt->execute([$email]);

            if ($stmt->rowCount() > 0) {
                $_SESSION['email-err'] = "Cet email est déjà utilisé.";
                $err = true;
            }
        }

        if ($password === "") {
            $_SESSION['password-err'] = "Le mot de passe est obligatoire.";
            $err = true;
        }

        if ($confirm_password === "") {
            $_SESSION['confirm_password-err'] = "La confirmation du mot de passe est obligatoire.";
            $err = true;
        }

        if ($password !== $confirm_password) {
            $_SESSION['confirm_password-err'] = "Les mots de passe ne correspondent pas.";
            $err = true;
        }

    }

    public function submitLogin(){
        $err = false;
        $email = trim($_POST["email"] ?? '');
        $password = trim($_POST["password"] ?? '');

        $this->validationLogin($err, $email, $password);
        if (!$err) {
            $query = "SELECT * FROM users WHERE email = ?";
            $stmt = DataBase::getConnection()->prepare($query);
            if ($stmt->execute([$email])) {
                if ($stmt->rowCount() === 1) {
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    if (password_verify($password, $user['password'])) {
                        unset($_SESSION['email'], $_SESSION['password']);
                        $_SESSION['user_id'] = $user['id'];
                        $_SESSION['user_role'] = $user['role'];
                        $_SESSION['success'] = "Connexion réussie.";
                        header("Location: /");
                        exit();
                    } else {
                        $_SESSION['error'] = "Email ou mot de passe incorrect.";
                    }
                } else {
                    $_SESSION['error'] = "Email ou mot de passe incorrect.";
                }
            } else {
                $_SESSION['error'] = "Une erreur est survenue. Veuillez réessayer plus tard.";
            }
        }

        header("Location: /login");
        exit();
    }

    public function validationLogin(&$err, $email, $password){

        $_SESSION['email'] = htmlspecialchars($email, ENT_QUOTES);
        $_SESSION['password'] = htmlspecialchars($password, ENT_QUOTES);

        if ($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['email-err'] = "Email invalide.";
            $err = true;
        }

        if ($password === "") {
            $_SESSION['password-err'] = "Le mot de passe est obligatoire.";
            $err = true;
        }
    }

}