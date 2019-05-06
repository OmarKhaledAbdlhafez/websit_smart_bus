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
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    if(isset($_GET['user'])) {
        $user = $_GET['user'];
    }
    if (isset($_POST["submit"])) {
        $des = mysqli_real_escape_string($con, $_POST['des']);
$res =" INSERT INTO submission(  Ride_id, User_id,  Describtion)
  VALUES 
  ('$id','$user','$des')";
      $rs = mysqli_query($con,$res);
      if ($rs){
          echo "thank u for ur feedback";
          header( "Refresh: 2; URL=user.php");
      }
      else{
          echo  mysqli_error($con);
      }
    }

    ?>
    </div>
    </body>
</html>