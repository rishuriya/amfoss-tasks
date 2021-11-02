<?php
include 'security.php';
if (!$connection) {
    die("Could not connect because " . mysqli_error($conn));
}

if (isset($_POST["submitpost"])) {
    $post = filter_var(htmlentities($_POST["editordata"]), FILTER_SANITIZE_STRING);
    $id=$_SESSION['id'];
    $title=$_POST["title"];
    $subtitle=$_POST["subtitle"];
    $file=$_FILES['file'];
    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetmp=$file['tmp_name'];

echo $file;
    $fileext=explode('.', $filename);
    $filecheck=strtolower(end($fileext));

     $table=$_SESSION['username'];
    $fileextstored = array('png','jpg','gif','jpeg');

    if(in_array($filecheck, $fileextstored))
    {
        $destinationfolder='blog/'.$filename;
    $sql = "INSERT INTO user_blog (uid,title,subtitle,blog,file)VALUE('$id','$title','$subtitle',?,'$destinationfolder')";

    $stmt = mysqli_stmt_init($connection);

    mysqli_stmt_prepare($stmt, $sql);

    mysqli_stmt_bind_param($stmt, "s", $post);

    if(mysqli_stmt_execute($stmt)){
        move_uploaded_file($filetmp, $destinationfolder);
        echo json_encode(["status"=>0, "saved successfully!"]);
        header('location:wall.php');
    }else{
        echo json_encode(["status"=>1, "could not save!"]);

    }
}

}