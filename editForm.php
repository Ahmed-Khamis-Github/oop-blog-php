<?php
require_once 'templates/header.php' ;
include 'includes/class-autoload.inc.php' ;
$posts=new Posts() ;
$post=$posts->editPost($_GET['id']) ;
$title=$post['title'] ;
$body=$post['body'] ;
$author=$post['author'] ;
$id=$post['id'] ;


?>


 <div class="text-center m-4">
    <h3>Edit Post</h3>
    </div>
    <div class="row">
        <div class="col-md-7 mx-auto">
        <form action="post.process.php?id=<?php echo $id?>" method="POST">
           <div class="form-group">
            <label>Title</label>
            <input class="form-control" value=<?php echo $title ?> name='title' type="text" required>
           </div> 
           <div class="form-group">
            <label>Content</label>
            <textarea class="form-control"  name='content' type="text" required> <?php echo $body ?></textarea>
           </div> 
           <div class="form-group">
            <label>Author</label>
            <input class="form-control" value=<?php echo $author ?> name='author' type="text" required>
           </div> 
           <div class="modal-footer">
           <a href="index.php"   class="btn btn-secondary">GO Homepage</a>
        <button type="submit" name="update" class="btn btn-primary">Update Post</button>
      </div>
        </form>
        </div>
    </div>
