<?php
require_once 'Library/book.php';
require_once 'Library/library.php';
require_once 'Users/Person.php';
require_once 'Users/Member.php';
require_once 'Users/Staff.php';

use Library\Book;
use Library\Library;
use Library\Users\Member;

$library = new Library;

$book1 = new Book('strong hold','hussien','123456789');
$book2 = new Book("Mount and blade 2",'mostafa','147852369');

$library->addBook($book1);
$library->addBook($book2);

$member = new Member("Ali",25,12);
echo $member->borrowBook($book1);

$library->listBooks();
echo "Total Books: ". Library::getTotalBooks();
