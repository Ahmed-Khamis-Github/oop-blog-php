<?php
 
class User {
    public $name   ;
    public $email  ;
    public $age ;
    public $is_admin= false ;


    public function __construct($name,$email,$age)
    {
        $this->name=$name ;
        $this->email=$email ;
        $this->age=$age ;
    }



    public function birthdaygreet(){
        
        echo "happy birthday your new age is ".++$this->age ;
    }

    public function UpdateEmail ($newemail){
        $this->email=$newemail ;

    }

    function __destruct()
    {
        echo "good bye $this->name" ;   
    }
}