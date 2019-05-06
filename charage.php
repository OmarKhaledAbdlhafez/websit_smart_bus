<html>
<head>
	<link rel="stylesheet" type="text/css" href="rout.css">
	<meta name="viewport" content="width=device-width">

</head>
<body>
<div class=" wrapper divform">
<form class=" form" method="post">
<label for="charage">enter charage number</label>
<br>
<input type="number" id="charage" name="charage">
<input type="submit" name="submit" value="submit">
</form>

<?php
$con = mysqli_connect('localhost', 'root', '', "smart_bus");
session_start();
$userid=$_SESSION['user_id'];

if(isset($_POST['submit'])) {
    $cnum = mysqli_real_escape_string($con,$_POST['charage']);
    $sel1 = "SELECT Value FROM charging_code WHERE  Code_num='$cnum'";
$res = mysqli_query($con, $sel1);

if ($res) {
    $row = mysqli_fetch_array($res);
    $v= $row['Value'];
    $sel2 = "SELECT  Credit FROM user WHERE User_id='$userid' ";
    $data = mysqli_query($con, $sel2);
    $r=mysqli_fetch_array($data);
    $v+=$r['Credit'];
    $up = "UPDATE user SET Credit='$v' WHERE User_id='$userid'";
    $rt=mysqli_query($con, $up);
    if ($rt){
        $up2="UPDATE `charging_code` SET 
       User_id='$userid' WHERE Code_num='$cnum'";
        mysqli_query($con,$up2);
        echo "ur charge is adding";
        header('Refresh: 2; URL=user.php');
    }
    else{
        echo mysqli_error($con);
    }
}
else{
    echo mysqli_error($con);
}

}
?>
</div>
</body>
</html>