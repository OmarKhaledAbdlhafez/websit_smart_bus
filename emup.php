<html>
<head>
    <link rel="stylesheet" type="text/css" href="rout.css">
</head>
<body>
<div class=" wrapper divform">
    <form class=" form" method="post">
        <label for="salary">salary:</label>
        <br>
        <input type="number" id="salary" name="sal">
        <br>
        <input type="submit" name="update" value="update" >
    </form>
    <?php
    if (isset($_POST['update'])){
        $sal=$_POST['sal'];
    $con = mysqli_connect('localhost', 'root', '', "smart_bus");
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "UPDATE employee SET Salary='$sal' WHERE Employee_id=$id";
        $result = mysqli_query($con, $query);
        if ($result) {
            header('Refresh: 2; URL=admin.php');
        }
        else{
            echo "error";
        }
    }
    }
    ?>
</div>
</body>
</html>