<?php
// require_once "classes/User.php" ;
// $kareem= new user ('miso','miso.com',25);
// var_dump($kareem) ;
 

// echo "<hr>" ;
// $esraa= new user("esraa","esraaali.com",30) ;
 
// var_dump($esraa) ;
// $esraa->UpdateEmail("esraakhamis.com") ;

// echo "<hr>" ;

// var_dump($esraa) ;
// require_once 'classes/Db.php' ;
// $connect=new Db() ;
// $connect->connect() ;
interface c{
    public function sayhello() ;
}
class a implements c{
    public function sayhello(){
        echo "say hello" ;
    }
}

 
 class b{
    static public function do($obj){
        $obj->sayhello() ;
    }
 }
$s=new b() ;
b::do($s) ;