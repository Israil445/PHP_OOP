<?php 
require_once "Book.php";
require_once "Customer.php";

$book = new Book(9785267006323,"To Kill a Mockingbird", "Harper Lee",12);
echo $book."<br>";
$book->setAvailable(4);
$book->setAuthor("Israil");
echo $book."<br>";
echo $book->getTitle()."<br>";

$customer = new Customer(2, "Mary", "Poppins", "mp@mail.com");
echo $customer."<br>";
$customer->email = "author445@email.com";
echo $customer."<br>";

$customer->setEmail("author123@gmail.com");
echo $customer->getEmail()."<br>";


echo $book->getCopy()."<br>";
$book->addCopy(3);
echo $book."<br>";

?>