<?php $to='rdrishav2002@gmail.com';
      $subject='Email Verification';
      $message= " Please verify your Email Address to activated your account <a href='http://localhost/rishav/verify.php?vkey='>http://localhost/rishav/verify.php?vkey=</a>";
      $headers='From: rdrishav2002@yahoo.com  \r\n';
      $headers .='MIME-Version:1.0'.'\r\n';
      $headers .='Content-type:text/html;charset=UTF-8'.'\r\n';

      mail($to,$subject,$message,$headers);
      if(mail)
      echo 'done';
      ?>