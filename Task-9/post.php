<?php 
include('security.php');
include('includes/header.php');
include('includes/navwithoutsidebar.php');
?>


<div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      

        <div class="modal-body">
		<form action="code.php" method="POST" enctype="multipart/form-data">
	
	  <div class="form-group">
                <label>Add Caption </label>
                <textarea name="blog"  class="form-control" placeholder="" height='200'></textarea>
            </div>
			
	  	<div class="form-group">
                <label> Location </label>
                <input type="text" name="Location"  class="form-control" >
            </div>
			
			<div class="form-group">
                <label> Upload Picture </label>
                <input type="file" name="file" class="form-control" >
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="postbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>
<div class="container-fluid">
<?php
    
	$table=$_SESSION['username'];
$id=$_SESSION['id'];
$query1="Select * from user_post where uid=$id order by time desc limit 10";
    $query="Select * from user_blog where uid=$id order by time desc limit 3";
    $query_run=mysqli_query($connection,$query);
	$query_run1=mysqli_query($connection,$query1);
	

?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
            <button type="button" class="btn btn-primary " onclick="window.location='blog.php'">
              Compose Blog
            </button>
			<button type="button" class="btn btn-info " data-toggle="modal" data-target="#addPost">
              Compose post
            </button>
    </h6>
  </div>
  </div>
  <div class="row">
  <?php
  if(mysqli_num_rows($query_run)>0)
          {
            while($row= mysqli_fetch_assoc($query_run))
              { 

                ?>

          
            
			<div class="col-sm-4">
    <div class="card">
	<img src='<?php echo $row ['file'];?>' class="card-img-top" height='200' width='10' >
      <div class="card-body">
        <h5 class="card-title"><?php echo $row ['title'];?></h5>
        <p class="card-text"><?php echo $row ['subtitle'];?></p>
        <a href="readmore.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
             <?php
              } 
          }
          else

          {
			?>
            <div class="col-sm-4">
    <div class="card">
	<img src='img/feeling-empty.jpeg' class="card-img-top" height='200' width='10' >
      <div class="card-body">
        <h5 class="card-title">No blog</h5>
        <p class="card-text">Start writting your kisse</p>
        <a href="#" class="btn btn-primary">Lets see BlogWall</a>
      </div>
    </div>
  </div>
  <?php
          }

          
          if(mysqli_num_rows($query_run1)==0)
          {
            
              
          }
          else
          {
            while($row1= mysqli_fetch_assoc($query_run1))
              {
                
                ?>
                <form method='post' action='user_profile.php'>
                <input type="hidden" name="id" value="<?php echo $row1['id'];?>">
				
        </form>
		<?php
          }
        
		}
    
          ?>
		 
          
            </div>
			
             
  
		<script type="text/javascript">
		var showingSourceCode=false;
		var isInEditmode=true;
		let
    var frameContent;

		function enableEditMode (){
			blog.document.designMode='on';
		}
		function execCmd(command){
			blog.document.execCommand(command,false,null);
		}

		function execCommandWithArg(command,arg){
			blog.document.execCommand(command,false,arg);
	}
	function toggleSource(){
		if(showingSourceCode){
			blog.document.getElementsByTagName('body')[0].innerHTML=blog.document.getElementsByTagName('body')[0].textContent;
			showingSourceCode=false;
		}
		else{
			blog.document.getElementsByTagName('body')[0].textContent=blog.document.getElementsByTagName('body')[0].innerHTML;
			showingSourceCode=true;
		}
	}
	function toggleEdit(){
		if(isInEditmode)
		{
			blog.document.designMode='off';
			isInEditmode=false;
		}
		else
		{
			blog.document.designMode='on';
			isInEditmode=true;
		}
  }
    function getIframeContent(blog) {
            var frameObj = 
                document.getElementById(blog);
           var frameContent = frameObj
                .contentWindow.document.body.innerHTML;
  
  
            
	}
	
</script>
<?php
include('includes/script.php');
include('includes/footer.php');
?>