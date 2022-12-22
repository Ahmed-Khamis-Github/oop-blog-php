<?php 
class Posts extends Dbh{
    // لو هترجع كل حاجة من السليكت اعمل فيتش اوول من الكلاس
    public function getPost(){
        $sql="SELECT * FROM posts" ;
        $stmt=$this->connect()->prepare($sql) ;
        $stmt->execute() ;
        while($result=$stmt->fetchAll()){
            return $result ;
        }
    }

    public function addPost($title,$body,$author){
        $sql='INSERT INTO posts(title,body,author) VALUES(:title,:body,:author)' ;
        $stmt=$this->connect()->prepare($sql) ;
        $stmt->bindparam("title",$title) ;
        $stmt->bindparam("body",$body) ;
        $stmt->bindparam("author",$author) ;
        $stmt->execute() ;
        header("location:$_SERVER[HTTP_REFERER]") ;
    }

// لو هترجع حاجة واحدة من السليكت اعمل فيتش بس في الكلاس
    public function editPost($id){
        $sql='SELECT * FROM posts WHERE id= :id' ;
        $stmt=$this->connect()->prepare($sql) ;
        $stmt->bindparam("id",$id) ;
        $stmt->execute() ;
        $result=$stmt->fetch() ;
        return $result ;
    }

    public function updatePost($title,$body,$author,$id){
        $sql="UPDATE posts SET title= :title , body= :body , author= :author WHERE id= :id" ;
        $stmt=$this->connect()->prepare($sql) ;
        $stmt->bindparam("title",$title) ;
        $stmt->bindparam("body",$body) ;
        $stmt->bindparam("author",$author) ;
        $stmt->bindparam("id",$id) ;
        $stmt->execute() ;
    }


    public function delPost($id){
        $sql="DELETE FROM posts WHERE id = :id" ;
        $stmt=$this->connect()->prepare($sql) ;
        $stmt->bindparam("id",$id) ;
        $stmt->execute() ;
    }
}
