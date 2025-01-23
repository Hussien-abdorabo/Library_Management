<?php

namespace Library\Trait;

trait LoggerTrait{
    public function logAction($action){
        echo "[LOG]: $action\n"; 
    }
}