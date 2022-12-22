<?php
require_once 'Db.php' ;
class mysql extends Db{
   

    public function read(){
        echo "i'm reading from database " ;
    }
}