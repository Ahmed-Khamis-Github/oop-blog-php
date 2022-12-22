<?php
class Db{
    public $host='localhost' ;
    public $username='root' ;
    public $password='' ;
    public $dbname='sign' ;

    // public function __construct($servername,$username,$password,$dbname)
    // {
    //    $this->servername=$servername ; 
    //    $this->username=$username ; 
    //    $this->password=$password ; 
    //    $this->dbname=$dbname ; 
    // }
    public function connect(){
        $dsn='mysql:host='.$this->host.';dbname='.$this->dbname ;
        $database=new PDO($dsn,$this->username,$this->password) ;
        if($database){
            echo "success" ;
        }else{
            echo "failed" ;
        }
    } 

}