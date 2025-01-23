<?php

namespace Library;

use Library\Users\Member;
use Library\Users\Staff;

class Library{
    private $books=[];
    private static $totalBooks = 0;

    public function addBook(Book $book){
        $this->books[] = $book;
        self::$totalBooks++;

    }
    public function listBooks(): void {
        foreach ($this->books as $book) {
            echo $book . PHP_EOL.", ";
        }
        echo "<br>";
    }

    public static function getTotalBooks(): int {
        return self::$totalBooks;
    }


}




