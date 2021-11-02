<?php
session_start();
include('includes/header.php');

$connection=mysqli_connect('sg2nlmysql23plsk.secureserver.net:3306','Rishu','Rishu@2001','ph10985541241_svce');


$id = $_GET['id'];


$sql="select * from user_blog where id='$id'";
$query_run=mysqli_query($connection,$sql);
$row= mysqli_fetch_assoc($query_run);
$sql1="select * from user_blog where id!='$id'";
$query_run1=mysqli_query($connection,$sql1);

$Id=$row['uid'];
$sql2="select * from register where Id='$Id'";
$query_run2=mysqli_query($connection,$sql2);
$row2= mysqli_fetch_assoc($query_run2);
?>
 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<div class="blog-single gray-bg">
        <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="wall.php">BlogWall</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blog</li>
  </ol>
</nav>
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <article class="article">
                        <div class="article-img">
                            <img src="<?php echo $row['file'];?>" title="" alt="" height='300' width='800'>
                        </div>
                        <div class="article-title">
                            <h6><a href="#">Lifestyle</a></h6>
                            <h2><?php echo $row['title'];?></h2>
                            <h4><?php echo $row['subtitle'];?></h4>
                            <div class="media">
                                <div class="avatar">
                                    <img src="<?php echo $row2['profile_img'];?>" title="" alt="">
                                </div>
                                <div class="media-body">
                                    <label><?php echo $row2['Name'];?></label>
                                    <span><?php echo $row['time'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <p><?php echo nl2br(html_entity_decode($row["blog"])); ?></p>
                        </div>
                        
                    </article>
                    
                </div>
                <div class="col-lg-4 m-15px-tb blog-aside">
                   
                    <!-- Trending Post -->
                    <div class="widget widget-post">
                        <div class="widget-title">
                            <h3>Trending Now</h3>
                        </div>
                        <div class="widget-body">

                        </div>
                    </div>
                    <!-- End Trending Post -->
                    <!-- Latest Post -->
                    <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>Latest Post</h3>
                        </div>
                        <div class="widget-body">
                        <?php while($row1=mysqli_fetch_assoc($query_run1))
                            {
                            ?>
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="readmore.php?id=<?php 
                                            echo $row1['id']; ?>"><?php echo $row1['title'];?></a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        
                                        <a class="date" href="#">
                                        <?php echo $row1['time'];?>
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="<?php echo $row1['file'];?>" title="" alt="" height='200' width='200'>
                                    </a>
                                </div>
                            </div>
                            <form method="get" action="readmore.php">
    <input type="hidden" name="id" value="<?php $row1;?>">
    <input type="submit" style="color: transparent; background-color: transparent; border-color: transparent;">
</form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- End Latest Post -->
                    <!-- widget Tags -->
                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3>Latest Tags</h3>
                        </div>
                        <div class="widget-body">
                            <div class="nav tag-cloud">
                                <a href="#">Design</a>
                                <a href="#">Development</a>
                                <a href="#">Travel</a>
                                <a href="#">Web Design</a>
                                <a href="#">Marketing</a>
                                <a href="#">Research</a>
                                <a href="#">Managment</a>
                            </div>
                        </div>
                    </div>
                    <!-- End widget Tags -->
                </div>
            </div>
        </div>
    </div>

<?php 

include('includes/script.php');
include('includes/footer.php');
?>