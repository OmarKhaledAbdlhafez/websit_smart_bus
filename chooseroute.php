<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="rout.css">
	<meta name="viewport" content="width=device-width">
	

</head>
<body>
<div class=" wrapper divform">
<form class=" form" method="post" action="">
 <label for="dstation">Departure station</label>
<br>
<input type="number" id="dstation"  name="dstation">
<br>
<label for="Astation">Arrival_station</label>
<br>
<input type="number" id="Astation" name="Astation">
<br>
    <input type="submit" value="submit" name="submit">

</form>
<?php
$con = mysqli_connect('localhost', 'root', '', "smart_bus");
if(isset($_POST['submit'])) {
    $dstation =  $_POST['dstation'];
    $astation = $_POST['Astation'];
    if ((abs($astation-$dstation)) <=4){
        $cost = 5;
    }
    else{
        $cost=8;
    }
   $bus = rand(15,20);
    $sel="SELECT * FROM bus WHERE Bus_id=$bus";
    $select= mysqli_query($con,$sel);
    while ($row=mysqli_fetch_array($select)){
        $busid=$row['Bus_id'];
    }
    session_start();
    $user = $_SESSION['user_id'];
    $sel2 = "SELECT  Credit FROM user WHERE User_id='$user' ";
    $data = mysqli_query($con, $sel2);
    $r=mysqli_fetch_array($data);
    $cridet=$r['Credit'];
    if ($cridet>=5) {
        $cridet-=$cost;
        $up= "UPDATE user SET Credit='$cridet' WHERE User_id='$user' ";
        mysqli_query($con,$up);
        $insert = "INSERT INTO ride( Departure_station_id, Arrival_station_id, Cost,User_id,Bus_id)
       VALUES
       ('$dstation','$astation','$cost','$user',$busid)";
        $res = mysqli_query($con, $insert);
        if ($res) {
            echo "ur trip have booked scuessfully";
            header('Refresh: 2; URL=user.php');
        } else {
            echo mysqli_error($con);
            echo "fail";
        }
    }
    else {
        echo "sorry ur credit is too low u should charge ";
    }

}
?>
</div>
</body>
</html>