<?php 
include 'includes/class-autoload.inc.php' ;
$posts= new Posts ;
if(isset($_POST['submit'])){
 $title=$_POST['title'] ;
 $body=$_POST['content'] ;
 $author=$_POST['author'] ;
 $posts->addPost($title,$body,$author) ;
}elseif(isset($_POST['update'])){
    $title=$_POST['title'] ;
    $body=$_POST['content'] ;
    $author=$_POST['author'] ;
    $id=$_GET['id'] ;
    $posts->updatePost($title,$body,$author,$id) ;
    header("location:index.php") ;
}elseif(  $_GET['send']==='del'){
   $id=$_GET['id'] ;
   $posts->delPost($id) ;
   header("location:index.php") ;

}

