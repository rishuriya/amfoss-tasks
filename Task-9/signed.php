<?php
include('security.php');
?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>reunion</title>
	 <link rel = "icon" href="img/reunion (2).png" type = "image/x-icon">
 	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/signed.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
 <body>
<header>
	<?php
	$id= $_SESSION['id'];
	$query="Select * from register where Id=$id";
	$query_run=mysqli_query($connection,$query);
	$row= mysqli_fetch_assoc($query_run);
	?>
    <a href="#" class='logo'> reunion</a>
    <ul>
      <li><a href="#" >Dashboard</a></li>
      <li><a href="#">About</a></li>
      <li><a href="Community.php">Community</a></li>
      <li><a href="post.php">Post</a></li>
      <li><img src="<?php echo $row ['profile_img'];
?>" alt="Admin" class="rounded-circle" width="35" onclick="window.location='profile.php'">
            </li>
    </ul>

  </header>

  <section>
    <div class='title'>
        <h1 id='text1'><a href='#' style='color:white;'>Welcome <?php echo $row['Name'];?> </a></h1>
    </div>
    <script type="text/javascript" src="css/anime.js"></script>
  </section>
  <div class="sec" id='sec'>
    <h2>Recent Blogs</h2>
    <p> Recovering from Covid for those affected in the second wave has not been easy. Apart from the unfortunate many who have either died or suffered terribly before eventually emerging from the illness, the pandemic in its second coming has left deep and enduring psychological scars on virtually everyone else.<br>
      <br>
When we finally put 2020 behind us, the world had heaved a collective sigh of relief. For it seemed that the anxiety stemming from being confronted by a threat of a kind most of us had never encountered before would abate. Even if the virus re-surfaced, we would be more aware of what to do and what to avoid, better prepared in terms of infrastructure, more experienced in treating those affected by the disease. And most importantly, vaccination was finally becoming a reality. As if to encourage such positive ideas, the Indian caseload dropped significantly and with vaccination around the corner, we were getting ready to embrace a post-Covid world, full of hugs and shopping sprees. Indeed, many started behaving as if the pandemic was behind us.</p>

  </div>
</body>
</html>