<?php
class Book {
    private $isbn;
    private $title;
    private $author;
    private $available;
    
    //constructor
    public function __construct($isbn, $title, $author, $available) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    //getter methods
    public function getIsbn() : string {
        return $this->isbn;
    }
    public function getTitle() : string {
        return $this->title;
    }
    public function getAuthor() : string {
        return $this->author;
    }
    public function getAvailable() : bool {
        return $this->available;
    }
    
    //setter methods
    public function setIsbn(string $isbn){
        $this->isbn = $isbn;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function setAuthor(string $author) {
        $this->author = $author;
    }
    public function setAvailable($available) {
        $this->available = $available;
    }

    public function getCopy() : bool {
        if ($this->available > 0) {
            $this->available--;
            return true;
        } else {
            return false;
        }
    }
    public function addCopy($num) : bool {
        $this->available += $num;
        return true;
    }

    //magic methods
    public function __toString() {
        $string = "Title: {$this->title}.<br>".
        "Author: {$this->author}.<br>".
        "ISBN: {$this->isbn}.<br>".
        "Available Copies: {$this->available}<br>";
        return $string;
    }

    public function __call($method, $args){
        $details = "This method($method) doesn't exist ";
        return $details;
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
        }
        else{
            $string = "This property doesnt't exist.";
            return $string;
        }
    }
}
?>