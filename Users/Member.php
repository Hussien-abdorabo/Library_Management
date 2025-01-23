<?php

namespace Library\Users;



class Member extends Person{
    private $memberID;
    private $borrowedBooks = [];
    private const MAX_BORROW = 5;

    public function __construct($name, $age,$memberID){
        parent::__construct($name,$age);
        $this->memberID = $memberID;
    }


    public function borrowBook(\Library\Book $book){

        if (count($this->borrowedBooks) < self::MAX_BORROW && $book->borrow()){
            $this->borrowedBooks[] = $book;
            return "Book borrow successfully"."<br>";
        }
        return " Cannot borrow more Books!" ;
    }

    public function getRole(){
        return "Member";
    }
    
}

