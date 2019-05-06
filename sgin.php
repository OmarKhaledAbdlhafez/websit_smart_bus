<?php
$con = mysqli_connect('localhost', 'root', '', "smart_bus");
if (isset($_POST["submit"])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mail = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    $crd=0;
  $insert =" INSERT INTO user(Email, Name, Phone_num, Password,Credit, Gender)
  VALUES 
  ('$mail','$name','$phone','$pass','$crd','$gender')";
   $res=mysqli_query($con,$insert);
   if ($res) {

       echo "u sigin up ur account sucessfully go to log in ";
       header('Refresh: 2; URL=index.php');
   }
   else{
       echo mysqli_error($con);
   }
}



?>