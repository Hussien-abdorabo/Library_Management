<?php

namespace Library\Users;



class Staff extends Person{
    private $staffID;

    public function __construct($name, $age, $staffID){
        parent::__construct($name,$age);
        $this->staffID=$staffID;
    }

    public function getRole(){
        return "Staff";
    }
}