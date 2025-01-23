<?php

namespace Library;

use Library\Interface\Borrowable;
use Library\Trait\LoggerTrait;

class Book implements Borrowable{
    use LoggerTrait;
    private $title;
    private $author;
    private $isbn;
    private $isBorrowed = false;

    public function __construct($title,$author,$isbn){
        $this->title = $title;
        $this->author= $author;
        $this->isbn= $isbn;
    }

    public function borrow(){
        if(!$this->isBorrowed){
            $this->isBorrowed = true;
            $this->logAction("Book Borrowed: $this->title");
            return true;
        }
        $this->logAction("failed to borrow: $this->title");
        return false;
    }

    public function returnBook(){
        if($this->isBorrowed){
            $this->isBorrowed = false;
            return true;
        }
        return false;
    }

    public function __toString(){
        return "Title: $this->title, Author: $this->author, ISBN: $this->isbn";
    }
}


