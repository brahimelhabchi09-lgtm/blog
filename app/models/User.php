<?php
abstract class User {
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $created_at;


    public function __construct($id, $first_name, $last_name, $email,$password) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->created_at = date("Y-m-d H:i:s");
    }

    abstract public function getRole();

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->first_name . " " . $this->last_name;
    }

    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }
}
?>