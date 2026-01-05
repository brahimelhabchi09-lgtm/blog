<?php

class AuthController {
    public function login() {
        require_once __DIR__ . "/../views/templates/layout.php"; 
    }

    public function register() {
        require_once __DIR__ . "/../views/templates/layout.php"; 
    }

    public function submitLogin(){
        session_start();
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
                        if($user['role'] === "admin"){
                            $_SESSION["user"] = new Admin($user["id"],$user["firstName"],$user["lastName"],$user["email"],$user["password"]);
                        }else{
                            $_SESSION["user"] = new Reader($user["id"],$user["firstName"],$user["lastName"],$user["email"],$user["password"]);
                        }
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

    public function submitRegister() {
        
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: /login");
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