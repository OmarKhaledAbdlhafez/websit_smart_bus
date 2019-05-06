<html>
<head>
    <link rel="stylesheet" type="text/css" href="rout.css">
    <meta name="viewport" content="width=device-width">
</head>
<body>
<div class=" wrapper divform">
    <form class=" form" method="post">
        <label for="des">description</label>
        <br>
        <input type="text" id="des" name="des">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    $con = mysqli_connect('localhost', 'root', '', "smart_bus");
    if (isset($_POST["submit"])) {
        if ($_GET['id']){
            $sub_id=$_GET['id'];
        }
        $des = mysqli_real_escape_string($con, $_POST['des']);
        $res =" INSERT INTO feedback( Employee_id, Response) 
 VALUES 
 (6,'$des')";
        $rs = mysqli_query($con,$res);
        if ($rs){
            $sel= "SELECT Feedback_id FROM feedback WHERE Response='$des'";
            $reslut=mysqli_query($con,$sel);
            $data=mysqli_fetch_array($reslut);
            $feed= $data['Feedback_id'];
            $up="UPDATE submission SET Feedback_id='$feed' WHERE Submission_id='$sub_id'";
            mysqli_query($con,$up);
            header( "Refresh: 5; URL=report.php");
        }
        else{
            echo  mysqli_error($con);
        }
    }

    ?>
</div>
</body>
</html>