<?php
include('security.php');
include('includes/header.php');
include('includes/navwithoutsidebar.php');
?>

    <main class="container">
<h1 class="mt-5 text-center">Start Writing Your Kisse.... 😊😊</h1>
          <h1 class="mt-5 text-center">We all Are Eager to read it</h1>
    <div class="row">
      <div class="starter-template mt-5 col-lg-12">
        
          <form method="post" action='db_request.php' enctype="multipart/form-data">
            <div class="form-group mb-3">
              <input type='text' name='title' class="form-control" placeholder="Enter Title....">
            </div>
            <div class="form-group mb-3">
              <input type='text' name='subtitle' class="form-control" placeholder="Enter Subitle....">
            </div>
            <div class="form-group mb-3">
              <textarea id="summernote" class="form-control" name="editordata"></textarea>
            </div>
            <div class="form-group mb-3">
              <input type='file' name='file' class="form-control" required>
            </div>
            <button class="btn btn-primary btn-block" name="submitpost">Post</button>

        </form>



      </div>

    </div>

    </main><!-- /.container -->

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="summernote/jquery-3.5.1.min.js"></script>
    <script src="summernote/popper.js"></script>
    <script src="summernote/bootstrap.js"></script>
    <script src="summernote/summernote/summernote.min.js"></script>
    <script src="summernote/main.js"></script>
  

<?php include'includes/footer.php';?>