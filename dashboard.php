<?php

   session_start();

   if(isset($_SESSION['user_email'])) {
      if((time() - $_SESSION['user-login-time']) > 600){
         header("location:logout.php");
      }else{
          $_SESSION['user-login-time'] = time();
       }
     }

   else{
      header("location:index.php");
      }
     
     echo "<span style='background:deepskyblue;width:100%;padding:20px 10px;display:flex;justify-content:space-around;align-items:center'>";
     echo "<h1>"."Hello ! "."</h1>"."<h2>".$_SESSION['user_email']."</h2>";
     echo "</span>";

 ?>