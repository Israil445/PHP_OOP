<?php
class Customer {
    private $id;
    private $firstName;
    private $lastName;
    private $email;
   
    //constructor
    public function __construct($id, $firstName, $lastName, $email) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
    
    //getter method
    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }
    public function getEmail() {
        return $this->email;
    }

    //setter methods
    public function setEmail($email) {
        $this->email = $email;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    //magic methods
    public function __toString() {
        return "ID: {$this->id}<br>".
        "Name: {$this->firstName} {$this->lastName}<br>".
        "Email: {$this->email}<br>";
    }
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        else{
            $string = "This property doesnt't exist.";
            return $string;
        }
    }
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }else{
            $string = "This property doesnt't exist.";
            return $string;
        }
    }
    public function __call($method, $args){
        $details = "This method($method) doesn't exist ";
        return $details;
    }
}
?>