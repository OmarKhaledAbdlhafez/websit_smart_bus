<?php
$con = mysqli_connect('localhost', 'root', '', "smart_bus");
if (isset($_POST["login"])) {
    $type = $_POST["type"];
    $mail = mysqli_real_escape_string($con, $_POST['emaillog']);
    $pass = mysqli_real_escape_string($con, $_POST['passwordlog']);
    if ($type == "admin") {
        if ($mail=="omarkhald02@gmail.com" && $pass=="omar123") {
            header("Location:admin.php");
        }
        else {
            echo "error not found , u may not be a admin , try to log in as user";
            header('Refresh: 5; URL=index.php');
        }
    } else if ($type == "user") {
        $sel = "SELECT * FROM user WHERE Email='$mail' && Password='$pass'";
       $res =mysqli_query($con,$sel);
        session_start();
       while ($row=mysqli_fetch_array($res)) {
           $user = $row['User_id'];
           $_SESSION['user_id']= $row['User_id'];
       }
       if ($res) {
         //  header("Location:user.php?id=$user");
           header("Location:user.php");
       }
       else {
           echo "not found go to sigin up ";
            header('Refresh: 1; URL=index.php');
       }
    }
}

?>