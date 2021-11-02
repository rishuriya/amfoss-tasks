<?php
session_start();
$connection=mysqli_connect('sg2nlmysql23plsk.secureserver.net:3306','Rishu','Rishu@2001','ph10985541241_svce');


if(isset($_POST['login_btn']))
{
    $na=$_POST['username'];
    $email_login = $_POST['email']; 
    $password_login = $_POST['password'];
    $pass=md5($password_login); 
  	$name=strtolower($na);
    $query = "SELECT * FROM register WHERE username='$name' or email='$name' AND password='$pass'";
    
    $query_run = mysqli_query($connection,$query);
    $usertypes=mysqli_fetch_array($query_run);
    if($query_run){
   if($usertypes['usertype']== 'admin')
   {
        $_SESSION['username'] = $email_login;
        $_SESSION['id']=$id;
        header('Location: index.php');
   } 
   else if ($usertypes['usertype']== 'user') {
  
    $_SESSION['username'] = $name;
     $_SESSION['id']=$usertypes['Id'];
     header('Location: Community.php'); 
       }
   else{
        $_SESSION['status'] =  $email_login ;
        header('Location: index.php'); 
	   
   }
	}
    
}
if(isset($_POST['composebtn']))// member save
{
    $title=$_POST['title'];
    $blog=$_POST['blog'];
    $subtitle=$_POST['subtitle'];
    $file=$_FILES['file'];
    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetmp=$file['tmp_name'];


    $fileext=explode('.', $filename);
    $filecheck=strtolower(end($fileext));

     $table=$_SESSION['username'];
    $fileextstored = array('png','jpg','gif','jpeg');

    if(in_array($filecheck, $fileextstored))
    {
        $destinationfolder='blog/'.$filename;
        $id=$_SESSION['id'];
        $query="insert into user_blog (uid,title,subtitle,blog,file) values ($id,'$title','$subtitle','$blog','$destinationfolder')";
        $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
            move_uploaded_file($filetmp, $destinationfolder);
        
        $_SESSION['blog'] = "$blog";
        $_SESSION['file'] = "$destinationfolder";
        header('Location: wall.php');
        }
        else
        {
        $_SESSION['success'] = "error";
        header('Location:post.php');
        }
    }
  }

if(isset($_POST["signup"]))
{
  //$id;
  $name=$_POST['name'];
  $user=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
  $pass=md5($password);
	$username=strtolower($user);
  //v-key
 // $vkey=md5(time().$username); 

  if ($password===$confirmpassword) {
  $query="insert into register (Name,username,email,password,usertype) values('$name','$username','$email','$pass','$usertype')";

  $query_run=mysqli_query($connection,$query);
  if($query_run){
    //echo "saved";
    $sql="CREATE TABLE $username( id INT NOT NULL AUTO_INCREMENT , username VARCHAR(255) NOT NULL , name VARCHAR(255) NOT NULL , uid int NOT NULL ,`status` VARCHAR(13) NOT NULL DEFAULT 'follower' , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    $query_run1=mysqli_query($connection,$sql);
    $_SESSION['username']= $username;
    
    
      
    header('location: index.php');

    

  }
  else{
    //echo "not saved";
    $_SESSION['Status']= "Admin profile NOT added";
    header('location:login.php');
    echo "ERROR";
  }



  }else
  {
    $_SESSION['Status']= "Password and confirm password DOES NOT match";
    header('location:register.php');
    echo "connect";
  }
  

}


if(isset($_POST['update']))//profile_edit
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $designation=$_POST['designation'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $website=$_POST['website'];
    $twitter=$_POST['twitter'];
    $instagram=$_POST['instagram'];
    $facebook = $_POST['facebook']; 
    $github = $_POST['github']; 
    $id=$_SESSION['id'];
	
	$file=$_FILES['file'];
    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetmp=$file['tmp_name'];


    $fileext=explode('.', $filename);
    $filecheck=strtolower(end($fileext));

   
    $fileextstored = array('png','jpg','gif','jpeg');
    if($filename==null)
    {
      
      $query=$query="UPDATE `register` SET `Name`='$name',`email`='$email',`mobile`='$mobile',`phone`='$phone',`address`='$address',`designation`='$designation',`website`='$website',`github`='$github',`twitter`='$twitter',`instagram`='$instagram',`facebook`='$facebook' WHERE Id='$id'";
      $query_run = mysqli_query($connection, $query);
        if($query_run)
          {
            
            
    
            header('Location: profile.php');
          }
        else
          {
            $_SESSION['success'] = "About Us NOT added";
            header('Location:signed.php');
          }
        }

elseif(in_array($filecheck, $fileextstored))
    {
     $destinationfolder='profile_img/'.$id.$filename;
    $query="UPDATE `register` SET `Name`='$name',`email`='$email',`mobile`='$mobile',`phone`='$phone',`address`='$address',`profile_img`='$destinationfolder',`designation`='$designation',`website`='$website',`github`='$github',`twitter`='$twitter',`instagram`='$instagram',`facebook`='$facebook' WHERE Id='$id'";
    echo "ma";
    $query_run = mysqli_query($connection,$query);
    
    //$sql = "SELECT * FROM register WHERE username='$name' AND password='$password_login'";
    //$query_run1 = mysqli_query($connection,$sql);
    //$id=mysqli_fetch_array($query_run1);
   if($query_run)
   {
        move_uploaded_file($filetmp, $destinationfolder);
        header('Location: profile.php');
   } 
   
   else{
        
        header('Location: profile_edit.php');
   }
}
    
}
if(isset($_POST['postbtn']))// post
{
    $caption=$_POST['caption'];
    $location=$_POST['Location'];
    $name=$_SESSION['username'];
    $id=$_SESSION['id'];
    $file=$_FILES['file'];
    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetmp=$file['tmp_name'];

    
    $fileext=explode('.', $filename);
    $filecheck=strtolower(end($fileext));

     $table=$_SESSION['username'];
     $vkey=time().$table;
    $fileextstored = array('png','jpg','gif','jpeg');
    if($filename==null)
    {
      
      $query="insert into user_post (uid,name,caption,Location) values ('$id','$name','$caption','$location')";
      $query_run = mysqli_query($connection, $query);
        if($query_run)
          {
            
            
    
            header('Location: community.php');
          }
        else
          {
            $_SESSION['success'] = "About Us NOT added";
            header('Location:signed.php');
          }
        }
     elseif(in_array($filecheck, $fileextstored))
      {
        $destinationfolder='upload/'.$vkey.$filename;
        
        
          
        $query="insert into user_post (uid,name,caption,file,Location) values ('$id','$name','$caption','$destinationfolder','$location')";
        $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
            
        if(move_uploaded_file($filetmp, $destinationfolder))
{
   header('Location: community.php');
}
else
{
   header('Location: signed.php');
}
        
        
        }
        else
        {
        $_SESSION['success'] = "About Us NOT added";
        
        }
      }
    
  }
  if(isset($_POST['follow']))
  {
    $id=$_SESSION['followid'];
    $query="select * from register where Id='$id'";
    $query_run = mysqli_query($connection,$query);
      if(mysqli_num_rows($query_run)>0)/// follow btn///////
          {
            ($row= mysqli_fetch_assoc($query_run));
            $table=$row['username'];
            $Id=$_SESSION['id'];
            $profile=$row['Name'];
            
            $query1="select * from register where Id='$Id'";
            $query_run1 = mysqli_query($connection,$query1);
            if(mysqli_num_rows($query_run1)>0)
          {
            $row1= mysqli_fetch_assoc($query_run1);
            $username=$row1['username'];
            $name=$row1['Name'];
            $uid=$row1['Id'];
				echo $profile;
            $sql="insert into $table (username, name, uid) value('$username','$name','$uid')";
            $sql1="insert into $username (username, name, uid,status) value('$table','$profile','$id','following')";
            $query_run2 = mysqli_query($connection,$sql);
            $query_run3 = mysqli_query($connection,$sql1);
            if
            ($query_run2 && $query_run3)
            {
              header('location:Community.php');
            }
            
          }

          }
  }
  if(isset($_POST['unfollow']))
  {
    $id=$_SESSION['followid'];
    $query="select username from register where Id='$id'";
    $query_run = mysqli_query($connection,$query);
      if(mysqli_num_rows($query_run)>0)/// follow btn///////
          {
            ($row= mysqli_fetch_assoc($query_run));
            $table=$row['username'];
            $Id=$_SESSION['id'];
            $query1="select * from register where Id='$Id'";
            $query_run1 = mysqli_query($connection,$query1);
            if(mysqli_num_rows($query_run1)>0)
          {
            $row1= mysqli_fetch_assoc($query_run1);
            $username=$row1['username'];
            $name=$row1['Name'];
            $uid=$row1['Id'];
            $sql="DELETE FROM $table WHERE uid=$uid";
            $sql1="DELETE FROM $username WHERE uid=$id";
            $query_run2 = mysqli_query($connection,$sql);
            $query_run3 = mysqli_query($connection,$sql1);
            if
            ($query_run2 && $query_run3)
            {
              header('location:Community.php');
            }
          }

          }
  }
    


?>