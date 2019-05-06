<html>
<head>
    <title> admin panel</title>
    <style>
        table ,tr ,td {
            padding: 15px;
            margin-top: 10px;
            border: 1px solid black;
        }
        .tabs{
            overflow: hidden;
            width: 100%;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .tabs li{
            float: left;
            margin: 0 .5em 0 0;
        }

        .tabs a{
            position: relative;
            background: #ddd;
            background-image: linear-gradient(to bottom, #fff, #ddd);
            padding: .7em 3.5em;
            float: left;
            text-decoration: none;
            color: #444;
            text-shadow: 0 1px 0 rgba(255,255,255,.8);
            border-radius: 5px 0 0 0;
            box-shadow: 0 2px 2px rgba(0,0,0,.4);
        }

        .tabs a:hover,
        .tabs a:hover::after,
        .tabs a:focus,
        .tabs a:focus::after{
            background: green;
            color: white;
        }

        .tabs a:focus{
            outline: 0;
        }

        .tabs a::after{
            content:'';
            position:absolute;
            z-index: 1;
            top: 0;
            right: -.5em;
            bottom: 0;
            width: 1em;
            background: #ddd;
            background-image: linear-gradient(to bottom, #fff, #ddd);
            box-shadow: 2px 2px 2px rgba(0,0,0,.4);
            transform: skew(10deg);
            border-radius: 0 5px 0 0;
        }

        .tabs .current a,
        .tabs .current a::after{
            background: green;
            color: white;
            z-index: 3;
        }

        .content
        {
            background: #fff;
            padding: 2em;
            height: 220px;
            position: relative;
            z-index: 2;
            border-radius: 0 5px 5px 5px;
            box-shadow: 0 -2px 3px -2px rgba(0, 0, 0, .5);
        }

        /*-----------------*/




    </style>
</head>
<body>
<div class="tabs">
    <ul>
        <li><a href="admin.php">Employees</a></li>
        <li><a href="buses.php">buses</a></li>
        <li><a href="jr.php">journeyes</a></li>
        <li><a href="report.php">feedback</a></li>
    </ul>
    <div>
        <?php
        echo '<table>
<tr><td><b>#</b></td>
<td><b>employee name</b></td>
<td><b>Brith-date</b></td>
<td><b>Address</b></td>
<td><b>phone number</b></td>
<td><b>department</b></td>
<td><b>job title</b></td>
<td><b>hiring date</b></td>
<td><b>salary</b></td>
<td><b>Edit</b></td>
</tr>';
        $con = mysqli_connect('localhost', 'root', '', "smart_bus");
        $sel1 = "SELECT * FROM employee";
        $res1 = mysqli_query($con, $sel1);
        if ($res1) {
            while ($row1 = mysqli_fetch_array($res1)) {
                $x1 = $row1["Employee_id"];
                echo '<tr><td>' .
                    $row1['Employee_id'] . '</td><td>' .
                    $row1['Employee_name'] . '</td><td>' .
                    $row1['Birth_date'] . '</td><td>' .
                    $row1['Address'] . '</td><td>' .
                    $row1['Phone_num'] . '</td><td>' .
                    $row1['Department'] . '</td><td>' .
                    $row1['Job_title'] . '</td><td>' .
                    $row1['Hiring_date'] . '</td><td>' .
                    $row1['Salary'] .
                    '<td><a href="emup.php?id=' . $x1 . '">Edit</a></td>';
                echo '</tr>';
            }
        }
        ?>
    </div>

</div>
</body>
</html>