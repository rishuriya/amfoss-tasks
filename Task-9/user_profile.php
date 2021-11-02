<?php
include('security.php');
if(isset($_POST['community']))
{
  $id=$_POST['id'];
	echo $id;
if($id===$_SESSION['id'])
{
  header('location: profile.php');
}
else{

include('includes/header.php');
include('includes/navwithoutsidebar.php');
	}
}
else{

  include('includes/header.php');
  include('includes/navwithoutsidebar.php');
  

$id=$_GET['id'];
  
}
?>
<div class="container">
    <div class="main-body">
    
          
    <?php
    
    
    $query="Select * from register where Id=$id";
    $_SESSION['followid']=$id;
    $query_run=mysqli_query($connection,$query);

      
  if(mysqli_num_rows($query_run)>0)
          {
            ($row= mysqli_fetch_assoc($query_run));
              $name=$row['username'];
              $uid=$_SESSION['id'];
              
              $sql="Select * from $name where uid=$uid";
              $query_run2=mysqli_query($connection,$sql);
                if(mysqli_num_rows($query_run2)==0)
                {
                ?>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $row ['profile_img'];?>" alt="Admin" class="rounded-circle" width="200" height="200">
                    <div class="mt-3">
                      <h4><?php echo $row ['Name'];?></h4>
                      <p class="text-secondary mb-1"><?php echo $row ['designation'];?></p>
                      <p class="text-muted font-size-sm"><?php echo $row ['address'];?></p>
                      <form method='post' action='code.php'>
                      <button type='submit' name='follow' class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
              }
              else
              {
                ?>
              <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $row ['profile_img'];?>" alt="Admin" class="rounded-circle" width="200" height="200">
                    <div class="mt-3">
                      <h4><?php echo $row ['Name'];?></h4>
                      <p class="text-secondary mb-1"><?php echo $row ['designation'];?></p>
                      <p class="text-muted font-size-sm"><?php echo $row ['address'];?></p>
                      <form method='post' action='code.php'>
                      <button type='submit' name='unfollow' class="btn btn-primary">Unfollow</button>
                      <button class="btn btn-outline-primary">Message</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

                <?php
              }
              ?>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary"><?php echo $row ['website'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary"><?php echo $row ['github'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary"><?php echo $row ['twitter'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary"><?php echo $row ['instagram'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary"><?php echo $row ['facebook'];?></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Follower
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

              <?php
              $sql1="select * from $name where status='follower'";
              $query_run3=mysqli_query($connection,$sql1);
              if($query_run3)
              {$row2=mysqli_num_rows($query_run3);
              

              ?>

                                    <h1> <?php echo $row2;?></h1>
                                    <?php }
                                    ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-astronaut fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Following</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
              $sql2="select * from $name where status='following'";
              $query_run4=mysqli_query($connection,$sql2);
              if($query_run4)
              {$row3=mysqli_num_rows($query_run4);
              

              ?>
                                
                                        <h1> <?php echo $row3;?></h1>
                                    <?php }
                                    ?>
                                       


                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Post</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php
              $sql3="select * from user_post where uid='$id'";
              $query_run5=mysqli_query($connection,$sql3);
              if($query_run5)
              {$row4=mysqli_num_rows($query_run5);
              

              ?>

                                        <h1> <?php echo $row4;?></h1>
                                        <?php }
                                    ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-pencil-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Blog</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
              $sql4="select * from user_blog where uid='$id'";
              $query_run6=mysqli_query($connection,$sql4);
              if($query_run6)
              {$row5=mysqli_num_rows($query_run6);
              

              ?>

                                        <h1><?php echo $row5;?></h1>
                                        <?php }
                                    ?>


                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-quote-right fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
              </div>

                
             

<?php
          }
          else
  
          {
            echo "NO RECORD FOUND";
          }
    
    
	

  
    
   
    $query1="Select * from user_post where uid='$id' order by time desc";
    
    $query_run1=mysqli_query($connection,$query1);

?>
<?php
          if(mysqli_num_rows($query_run1)>0)
          {
            while($row1= mysqli_fetch_assoc($query_run1))
              {
                
                ?>
                <form method='post' action='user_profile.php'>
                <input type="hidden" name="id" value="<?php echo $row1['id'];?>">
        <div class="card-body">
          <!-- Inner card-->
          <div class="card">
            <div class="card-heading">
              <div class="media m0">
                <div class="media-left"><img src="img/undraw_profile.svg " alt="User" class="media-object img-circle thumb48"></div>
                <div class='media-right'><i class="fal fa-ellipsis-h-alt"></i></div>
                <div class="media-body media-middle pt-sm">
                  <p class="media-heading m0 text-bold"><?php echo $row1['name'];?></p><small class="text-muted"><em class="ion-earth text-muted mr-sm"></em><span><?php echo $row1['time'];?></span></small>
                </div>
                <div class='media-right'>
                  
                  </div>
              </div>
              <div class="card-item"><img src="<?php echo $row1['file'];?>" onerror="this.style.display='none'" alt="MaterialImg" class="fw img-responsive"></div>
              <div class="p"> <p style='float:center;'><?php echo $row1['caption'];?></p></div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-flat btn-primary">Like</button>
              <button type="button" class="btn btn-flat btn-primary">Share</button>
              <button type="button" class="btn btn-flat btn-primary">Comment</button>
            </div>
          </div>
        </div>
        </form>
        <?php
              }
          }
          else
          {
            echo 'No Post till now';
          }
        
      
    
          ?>

      </div>
    </div>
    



            </div>
          </div>

        </div>
    
    <?php 

    include('includes/script.php');
    include('includes/footer.php');
    ?>