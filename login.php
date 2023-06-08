<?php
   include("database.php");
   include("session.php");
   
   $error = null;
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "SELECT id,name FROM srvtb WHERE email = '$myusername' and password = '$mypassword'";
      
      $result = mysqli_query($db,$sql);
      if(!$result){
         trigger_error('Invalid query: ' . $db->error);
      }
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         $_SESSION['name']= $row['name'];
         // print $_SESSION['login_user'];
         header("Location: index.php");
      }else {
         $_SESSION['message'] = "Your Login Name or Password is invalid";
         echo $_SESSION['message'];
         header("Location: log.php");
      }
   }
   else{
      $error = "GET not allowed";
   }
   $_SESSION['message']=$error;
   // header("Location: index.php");
?>
