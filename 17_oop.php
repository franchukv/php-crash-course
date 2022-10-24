<?php

class User {
    // Properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    public function __construct($name, $email, $password) {
       $this->name = $name;
       $this->email = $email;
       $this->password = $password;
    }
}

// Instantiate a user object
$user1 = new User('Brad', 'brad@gmail.com', '123');
$user2 = new User('Vova', 'vova@gmail.com', '1234');
$user3 = new User('Lily', 'lily@gmail.com', '12345');

// echo $user1->email;
// echo $user3->name;

// Inheritance

class Employee extends User {
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '123456', 'Manager');

echo $employee1->get_title();