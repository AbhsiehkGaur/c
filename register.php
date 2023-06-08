<?php
require_once('database.php'); 
session_start();




function register($Name,$Email,$Phoneno,$Companyname,$Position,$Feedback,$password){
  try {
    global $db;
    $sql="INSERT INTO srvtb(Name,Email,Phoneno,Companyname,Position,Feedback,password) VALUES(?,?,?,?,?,?,?)";
    $query=$db->prepare($sql);  
    $query->bind_param('sssssss',$Name,$Email,$Phoneno,$Companyname,$Position,$Feedback,$password);
    $exec= $query->execute();
      if($exec==true)
{
      return 1;
      }
      else
      {
        return "Error: " . $sql . "<br>" .$db->error;
      }
  }
  catch (Exception $e){
    print $e;
    $_SESSION['message']=$e;
  }
     
}   
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $Name = $_POST['name'];
  $Email    = $_POST['email'];
  $password = $_POST['password'];
  $Phoneno = $_POST['phoneno'];
  $Companyname = $_POST['cmp'];
  $Position = $_POST['pos'];
  $Feedback = $_POST['fdbk'];

  $res = register($Name,$Email,$Phoneno,$Companyname,$Position,$Feedback,$password);
  if ($res==1) {
    $_SESSION['login_user'] = $Email;
    header("Location: index.php");
    // die();
  }
  // header("Location: login.php");
  // die();
}
?>


