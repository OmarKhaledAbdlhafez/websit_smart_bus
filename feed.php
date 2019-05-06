<html>
    <head>
        <link rel="stylesheet" type="text/css" href="rout.css">
        <style>
            a{
                color: #fff;
            }
            table ,tr ,td {
                padding: 20px;
                border: 1px solid white;
            }

        </style>
    </head>
    <body>
        <?php
echo '<table>
<tr><td><b>#ride</b></td>
<td><b>#bus</b></td>
<td><b>astation</b></td>
<td><b>dstation</b></td>
<td><b>date</b></td>
</tr>';
        $con = mysqli_connect('localhost', 'root', '', "smart_bus");
        session_start();
        $user = $_SESSION['user_id'];
        $sel = "SELECT * FROM ride where User_id='$user' ";
        $res = mysqli_query($con, $sel);
        if ($res) {
            while ($row = mysqli_fetch_array($res)) {
                $x = $row["Ride_id"];
                $y=$row['User_id'];
                echo '<tr><td>' .
                    $row['Ride_id'] . '</td><td>' .
                    $row['Bus_id'] . '</td><td>' .
                    $row['Departure_station_id'] . '</td><td>' .
                    $row['Arrival_station_id'] . '</td><td>' .
                    $row['Date'] .
                    '<td><a href="feedback.php?id=' . $x . '& user='.$y.'">click to give  feedback</a></td>';
                echo '</tr>';
            }
        }
?>
    </body>
</html>