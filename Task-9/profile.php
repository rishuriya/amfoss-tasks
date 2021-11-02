<?php
include('security.php');
include('includes/header.php');
include('includes/navwithoutsidebar.php');
?>
<div class="container">
    <div class="main-body">
    
          
    <?php
    
    
	$table=$_SESSION['username'];

    $id=$_SESSION['id'];
    
    $query="Select * from register where Id=$id";
    $query_run=mysqli_query($connection,$query);

?>

<?php
  if(mysqli_num_rows($query_run)>0)
          {
            ($row= mysqli_fetch_assoc($query_run))
              
				
                ?>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $row ['profile_img'];?>" alt="Admin" class="rounded-circle" width="150" height="150">
                    <div class="mt-3">
                      <h4><?php echo $row ['Name'];?></h4>
                      <p class="text-secondary mb-1"><?php echo $row ['designation'];?></p>
                      <p class="text-muted font-size-sm"><?php echo $row ['address'];?></p>
                      
                    </div>
                  </div>
                </div>
              </div>
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
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row ['Name'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row ['email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['phone']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row ['mobile'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">About</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row ['address'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info "  href="profile_edit.php">Edit</a>
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

          ?>

              <div class="row gutters-sm ">
				  <!---modal follower---->
<div class="modal fade" id="follower" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
		  <h5 class='center'><center>Follower</center></h5>
        
      </div>
		<div class='modal-body'>
			<?php
		  $fol="select * from $table where status='follower'";
		  $queryTorun=mysqli_query($connection,$fol);
              if($queryTorun)
			  {while($people=mysqli_fetch_assoc($queryTorun))
				  {
				  $ph=$people['uid'];
				  $img="Select profile_img from register where Id='$ph'";
				  $queryTorun1=mysqli_query($connection,$img);
			   $photo=mysqli_fetch_assoc($queryTorun1);
				  
			  ?>
			<div class="row no-gutters align-items-center">
				<div class="mr-0">
					<img src="<?php echo $photo['profile_img'];?>" alt="Admin" class="rounded-circle" width="40" height='40'>
				</div>
				<div class="mr-auto">
				<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
					
					<h6><?php echo $people['name'];?></h6>
					</div>
					<div class="mb-0 font-weight text-gray-800">
						<span><?php echo $people['username'];?></span>
					</div>
				</div>
					<div class="ml-auto">
                    <button type="button" class="btn btn-light">Remove</button>
					</div>
                
			</div>
			<?php }
					 }
					 ?>
			
		</div>			  
  </div>
</div>
</div>
				   <!---modal follower---->
<div class="modal fade" id="following" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
		  <h5 class='center'><center>Following</center></h5>
        
      </div>
		<div class='modal-body'>
			<?php
		  $fol1="select * from $table where status='following'";
		  $queryTorun1=mysqli_query($connection,$fol1);
              if($queryTorun1)
			  {while($people1=mysqli_fetch_assoc($queryTorun1))
			  {
			$ph1=$people1['uid'];
				  $img1="Select profile_img from register where Id='$ph1'";
				  $queryTorun2=mysqli_query($connection,$img1);
			   $photo1=mysqli_fetch_assoc($queryTorun2);?>
			<div class="row no-gutters align-items-center">
				<div class="mr-0">
					<img src="<?php echo $photo1['profile_img'];?>" alt="Admin" class="rounded-circle" width="40" height='40'>
				</div>
				<div class="mr-auto">
				<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
					
					<h7><?php echo $people1['name'];?></h7>
					</div>
					<div class="text-muted text-ellipsis">
						<span><?php echo $people1['username'];?></span>
					</div>
				</div>
					<div class="ml-auto">
                    <button type="button" class="btn btn-light">UnFollow</button>
					</div>
                
			</div>
			<hr>
			<?php }
					 }
					 ?>
			
		</div>			  
  </div>
</div>
</div>
<div class="modal fade" id="post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
		  <h5 class='center'><center><?php echo $row ['Name'];?> `s Post</center></h5>
        
      </div>
		<div class='modal-body'>
			<?php
		  $fol2="select * from user_post where uid='$id' order by time desc";
		  $queryTorun2=mysqli_query($connection,$fol2);
              if($queryTorun2)
			  {while($people2=mysqli_fetch_assoc($queryTorun2))
			  {?>
			<section class="hero">
                  
         
        <div class="col-lg-12 offset-lg-0">
			
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
         <img class="img-fluid rounded-circle" src="<?php echo $row ['profile_img'];?>" alt="User">
			   </div>
			   <div class="media-body">
			    <p class="m-0"><?php echo $people2['name'];?></p>
				<small><span><i class="icon ion-md-pin"></i><?php echo $people2['Location'];?></span></small>
				<small><span><i class="icon ion-md-time"></i><?php echo $people2['time'];?></span></small>
			   </div>
			  </div><!--/ media -->
			 </div><!--/ cardbox-heading -->
			  
			 <div class="cardbox-item">
         <div class="text-center">
			  <img class="img-fluid" style="float:center;" src="<?php echo $people2['file'];?>" alt="Image" onerror="this.style.display='none'" ></div>
        <p style="text-align: justify"><?php echo $people2['caption'];?></p>
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
       
			 			  
					
			</div><!--/ cardbox -->

           </div><!--/ col-lg-6 -->	
              
</section>
			<?php }
					 }
					 ?>
			
		</div>			  
  </div>
</div>
</div>
               <!----follower---> 
              <div class="col-xl-3 col-md-6 mb-4 h-50" data-toggle="modal" data-target="#follower">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Follower
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

              <?php
              $sql1="select * from $table where status='follower'";
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
                        <div class="col-xl-3 col-md-6 mb-4 h-50" data-toggle="modal" data-target="#following">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Following</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php 
              $sql2="select * from $table where status='following'";
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
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  

                        <div class="col-xl-3 col-md-6 mb-4 h-50" data-toggle="modal" data-target="#post">
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


                        <div class="col-xl-3 col-md-6 mb-4 h-50">
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

                                        <h1> <?php echo $row5;?></h1>
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
          </div>

        </div>
    
    <?php 
    include('includes/script.php');
    include('includes/footer.php');
    ?>