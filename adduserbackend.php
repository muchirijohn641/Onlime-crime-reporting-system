 

<?php
require_once('database/Database.php');
$db = new Database(); 

if(session_status() == PHP_SESSION_NONE)
{
  include('session.php');
   include('dbconnect.php');
}



//array created to handle the error msgs
$errors = array();

// array to hold the json econded data
$output = array('error' => false);


  //Variables to hold the form data
$id=$_POST['id'];
$username=$_POST['name']; 
$phone=$_POST['phone'];
$status=$_POST['status']; 
$password=$_POST['pwd']; 
 
 


$sql = "INSERT INTO userlogin (staffid,name,phone,status,password)
                                       VALUES('$id','$username','$phone','$status',SHA1('$password')); ";

                   $success = mysqli_query($dbcon,$sql);

                         if( $success )

                         {
                             
      echo "<script type='text/javascript'>alert('User Added');
      document.location='login.php'</script>";
                      }
            



        

        ?>
