<?php 
include('security.php');
include('includes/header.php');
include('includes/navwithoutsidebar.php');
?>

<div class="container-fluid">



  <div class="card-body">
<?php
    if(isset($_POST['search']))
    {
        $name=$_POST['name'];
        
        $query = "SELECT * FROM register WHERE Name like '%$name%' or username like '%$name%'";
        
        $query_run = mysqli_query($connection,$query);
        
       }

?>
    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            
            <th> Username </th>
            <th>Name</th>
            
            
            
          </tr>
        </thead>
        <tbody>
          <?php

          if(mysqli_num_rows($query_run)>0)
          {
            while($row= mysqli_fetch_assoc($query_run))
              { 

                ?>

          <tr>
            <td><?php echo $row ['Id'];?> </td>
            <td><?php echo $row ['username'];?> </td>
            <td><?php echo $row ['Name'];?> </td>
            
             <?php
              } 
          }
          else

          {
            echo "NO RECORD FOUND";
          }

          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<?php
include('includes/script.php');
include('includes/footer.php');
?>