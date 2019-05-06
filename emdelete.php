<?php
$con = mysqli_connect('localhost', 'root', '', "smart_bus");
if(isset($_GET['id'])) {
    $id= $_GET['id'];
    $query = "DELETE FROM employee WHERE Employee_id=$id";
    $result = mysqli_query($con,$query);
    if ($result){
        echo "<script>
    window.alert('the data is delete ');
</script>";
    }
    else {
//        echo "<script>
//    alert('the data is not delete ');
//</script>";
        echo mysqli_error($con);
    }
}
//header('Refresh: 5; URL=admin.php');
?>

