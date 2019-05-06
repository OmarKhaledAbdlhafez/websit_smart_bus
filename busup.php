<html>
<head>
    <link rel="stylesheet" type="text/css" href="rout.css">
</head>
<body>
<div class=" wrapper divform">
    <form class=" form" method="post">
        <label for="salary">state:</label>
        <br>
        <input type="text" id="salary" name="sal">
        <br>
        <input type="submit" name="update" value="update" >
    </form>
    <?php
    if (isset($_POST['update'])){
        $sal=$_POST['sal'];
        $word="";
        $con = mysqli_connect('localhost', 'root', '', "smart_bus");
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "UPDATE bus SET State='$sal' WHERE Bus_id=$id";
            $result = mysqli_query($con, $query);
            if ($result) {
                header('Refresh: 2; URL=buses.php');
            }
            else{
                echo "error";
                echo mysqli_error($con);
            }
        }
    }
    ?>
</div>
</body>
</html>