<?php
include('security.php');
include('includes/header.php');
include('includes/navwithoutsidebar.php');


    $query="Select * from user_blog order by time desc limit 25";
    $query_run=mysqli_query($connection,$query);
    

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
<?php
            if(mysqli_num_rows($query_run)>0)
          {
            while($row1= mysqli_fetch_assoc($query_run))
              {
                  
                
                ?>
               
                <div class="col-md-6 col-xl-4 mt-4">
                    <article class="post">
                        <div class="article-v2">
                            <figure class="article-thumb">
                                <a href="#">
                                    <img src="<?php echo $row1['file'];?>" alt="blog image" height='200' width='400' />
                                </a>
                            </figure>
                            <!-- /.article-thumb -->
                            <div class="article-content-main">
                                <div class="article-header">
                                    <h2 class="entry-title"><a href="#"><?php echo $row1['title'];?></a></h2>
                                    <div class="entry-meta">
                                        <div class="entry-date"><?php echo $row1['time'];?></div>
                                        <!-- /.entry-date -->
                                        <div class="entry-cat">
                                            <a href="#"><?php $id= $row1['uid'];
                                            
                                            $sql="Select Name from register where Id='$id'";
                                            
                                            $query_run1=mysqli_query($connection,$sql);
                                            if(mysqli_num_rows($query_run1)>0)
                                                {
                                                    $row2= mysqli_fetch_assoc($query_run1);

                                                    echo $row2['Name']; 
                                                    
                                                }?></a>
                                        </div>
                                        <!--  /.entry-cat -->
                                    </div>
                                    <!-- /.entry-meta -->
                                </div>
                                <!-- /.article-header -->
                                <div class="article-content">
                                    <p><?php echo $row1['subtitle'];?></p>
                                </div>
                                <!--  /.article-content -->
                                <div class="article-footer">
                                    <div class="row">
                                        <div class="col-6 text-left footer-link">
                                            <a href="readmore.php?id=<?php 
                                            echo $row1['id']; ?>" name='blogid' class="more-link">Read More</a>
                                        </div>
                                        <!--  /.col-6 -->
                                        <div class="col-6 text-right footer-meta">
                                            <a href="#">65 <i class="pe-7s-like"></i></a>
                                            <a href="#">50 <i class="pe-7s-share"></i></a>
                                        </div>
                                        <!--  /.col-6 -->
                                    </div>
                                    <!--  /.row -->
                                </div>
                                <!--  /.article-footer -->
                            </div>
                            <!--  /.article-content-main -->
                        </div>
                        <!--  /.article-v2 -->
                    </article>
                    <!--  /.post -->
                </div>
                <!--  /.col-md-6 -->
                <form method="get" action="readmore.php">
    <input type="hidden" name="id" value="<?php $row1;?>">
    
    <input type="submit" style="color: transparent; background-color: transparent; border-color: transparent;">
</form>
                <?php
              }
          }
          else
          {
            echo 'Follow People';
          }
          ?>
            </div>
            <!--  /.blog-carousel -->
        </div>
        <!--  /.col-12 -->
    </div>
    <!--  /.row -->
</div>

<?php 
include('includes/script.php');
include('includes/footer.php');
?>