<?php
include 'includes/class-autoload.inc.php' ; 
require_once 'templates/header.php' ;
  
 
 ?>


<!-- Button trigger modal -->
<div class="text-center">
<button type="button" class="m-5 btn btn-primary" data-toggle="modal" data-target="#addpost">
  Create Post
</button>
</div>


<!-- Modal -->
<div class="modal fade" id="addpost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form Input  -->
        <form action="post.process.php" method="POST">
           <div class="form-group">
            <label>Title</label>
            <input class="form-control" name='title' type="text" required>
           </div> 
           <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" name='content' type="text" required></textarea>
           </div> 
           <div class="form-group">
            <label>Author</label>
            <input class="form-control" name='author' type="text" required>
           </div> 
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Add Post</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div> 
<div class="row">
<?php $posts=new Posts() ; ?>

 <?php if($posts->getPost()) : ?>
<?php foreach($posts->getPost() as $post) : ?>
  <div class="col-md-6 mt-4">
    <div class="card"  >
   <div class="card-body">
    <h5 class="card-title"><?php echo $post['title']?></h5>
    <p class="card-text"> <?php echo $post['body'] ?></p>
    <h6 class="card-subtitle text-muted text-right">Author: <?php echo $post['author'] ?></h6>
    <a href="editForm.php?id=<?php echo $post['id']?>"   class="btn btn-warning">Edit</a>
    <a href="post.process.php?id=<?php echo $post['id'] ?>&send=del"   class="btn btn-danger">Delete</a>

    </div>
    </div>
    </div>

<?php endforeach ; ?>
 <?php else : ?>
<p class="mx-auto mt-5">Post is empty</p>  
<?php endif ; ?>


</div>




<?php
require_once 'templates/footer.php' ;
?>

