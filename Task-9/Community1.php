<?php
include('security.php');
include('includes/header.php');
include('includes/navwithoutsidebar.php');
?>

<?php
    
    $con = mysqli_connect('localhost','root','','nischay_userdata');
    $con1 = mysqli_connect('localhost','root','','post');
	$table=$_SESSION['username'];

  $id=$_SESSION['id'];
    
    $query="Select * from register where Id=$id";
    $query1="Select * from user_post order by time desc limit 10";
    $query_run=mysqli_query($con,$query);
    $query_run1=mysqli_query($con1,$query1);
    
?>

<?php
  if(mysqli_num_rows($query_run)>0)
          {
            ($row= mysqli_fetch_assoc($query_run))
              

                ?>

<section ui-view="" autoscroll="false" ng-class="app.viewAnimation" class="ng-scope container ng-fadeInLeftShort" style=""><!-- uiView:  --><div ui-view="" class="ng-fadeInLeftShort ng-scope">
<div class="container-overlap bg-indigo-500 ng-scope">
  <div class="media m0 pv">
    <div class="media-left"><a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User" class="media-object img-circle thumb64"></a></div>
    <div class="media-body media-middle">
      <h4 class="media-heading text-white"><?php echo $row['Name'];?></h4>
      <span class="text-white"><?php echo $row['about'];?></span>
    </div>
  </div>
  
</div>
<?php
          }
          else
          {
            echo 'plz try later';
          }
          ?>
<div class="container-lg ng-scope">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <form action="code.php" method='post' enctype='multipart/form-data' class="mt ng-pristine ng-valid">
          <div class="form-group ">
          <textarea rows="1" name='caption' placeholder='What`s on your mind??'  aria-multiline="true" tabindex="0" aria-invalid="false" class="form-control"></textarea>
          <button type="submit" name='postbtn' class="btn btn-outline-success"  style="float:right; position=inline-block;">
                    Save
                </button>
            <div class="image-upload">
              <label for="file-input">
              <i class="fas fa-camera fa-3x"></i>
            </label>

            <input id="file-input" name='file' type="file"/>
            </div>
            </div>
                  
          </form>
        </div>
        </div>
        </div>
        
        
        

        <?php
          if(mysqli_num_rows($query_run1)>0)
          {
            while($row1= mysqli_fetch_assoc($query_run1))
              {
                
                ?>
                <form method='post' action='user_profile.php'>
                <input type="hidden" name="id" value="<?php echo $row1['id'];?>">
                <section class="hero">
                  
         <div class="container">
          <div class="row">	
		  
		   <div class="col-lg-6 offset-lg-0">
			
			<div class="cardbox shadow-lg bg-white">
			 
			 <div class="cardbox-heading">
			  <!-- START dropdown-->
			  <div class="dropdown float-right">
			   <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
				<em class="fa fa-ellipsis-h"></em>
			   </button>
			   <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
				<a class="dropdown-item" href="#">Hide post</a>
				<a class="dropdown-item" href="#">Stop following</a>
				<a class="dropdown-item" href="#">Report</a>
			   </div>
			  </div><!--/ dropdown -->
			  <div class="media m-0">
			   <div class="d-flex mr-3">
         <button style="color: transparent; background-color: transparent; border-color: transparent;" type='submit' name='community'><img class="img-fluid rounded-circle" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/4.jpg" alt="User"></button>
			   </div>
			   <div class="media-body">
			    <p class="m-0"><?php echo $row1['name'];?></p>
				<small><span><i class="icon ion-md-pin"></i> Nairobi, Kenya</span></small>
				<small><span><i class="icon ion-md-time"></i> <?php echo $row1['time'];?></span></small>
			   </div>
			  </div><!--/ media -->
			 </div><!--/ cardbox-heading -->
			  
			 <div class="cardbox-item">
         
			  <img class="img-fluid" src="<?php echo $row1['file'];?>" alt="Image" onerror="this.style.display='none'">
        <p style="text-align: justify"><?php echo $row1['caption'];?></p>
			 </div><!--/ cardbox-item -->
			 <div class="cardbox-base">
			  <ul class="float-right">
			   <li><a><i class="fa fa-comments"></i></a></li>
			   <li><a><em class="mr-5">12</em></a></li>
			   <li><a><i class="fa fa-share-alt"></i></a></li>
			   <li><a><em class="mr-3">03</em></a></li>
			  </ul>
			  <ul>
			   <li><a><i class="fa fa-thumbs-up"></i></a></li>
			   <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
			   <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
			   <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
			   <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
			   <li><a><span>242 Likes</span></a></li>
			  </ul>			   
			 </div><!--/ cardbox-base -->
			 <div class="cardbox-comments">
			  <span class="comment-avatar float-left">
			   <a href=""><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..."></a>                            
			  </span>
			  <div class="search">
			   <input placeholder="Write a comment" type="text">
			   <button><i class="fa fa-camera"></i></button>
			  </div><!--/. Search -->
			 </div><!--/ cardbox-like -->			  
					
			</div><!--/ cardbox -->

           </div><!--/ col-lg-6 -->	
              
              </div>
          </div><!--/ row -->
        </form>
        <?php
              }
          }
          else
          {
            echo 'Find Friends';
          }
          ?>

      </div>
    </div>
    
         
    <div class="col-md-4">
      <div class="push-down"></div>
      <div class="card card-transparent">
        <h5 class="card-heading">Friends Suggestion</h5>
        <div class="mda-list">
        <?php
    
    
    
    $query2="Select * from register Where Id!=$id and usertype='user'";
    
    $query_run3=mysqli_query($con,$query2);
   

?>

<?php
  if(mysqli_num_rows($query_run3)>0)
          {
            while($row2= mysqli_fetch_assoc($query_run3))
              {

                ?>


          <div class="mda-list-item"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="List user" class="mda-list-item-img thumb48">
            <div class="mda-list-item-text mda-2-line">
              <h3><a href="#"><?php echo $row2['Name'];?></a></h3>
              <div class="text-muted text-ellipsis"><?php echo $row2['address'];?></div>
            </div>
          </div>
          <?php
              }
          }
          else
          {
            echo 'Find Friends';
          }
          ?>
          
        </div>
      </div>
    </div>
  


<?php 
    include('includes/script.php');
    include('includes/footer.php');
  ?>