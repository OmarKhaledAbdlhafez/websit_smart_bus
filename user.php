<html>
    <head>
        <link rel="stylesheet" type="text/css" href="use.css">
        <link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    </head>
    <body>
    <button style=" right: 0px;"><a href="logout.php">log out </a></button>
       <div>
           <h1 class="title" style="text-align: center;">
               our routes
           </h1>
           <ol class="timeline" >
 <?php
 $con = mysqli_connect('localhost', 'root', '', "smart_bus");
 $sel1 = "SELECT * FROM station where Station_id <=5";
 $res1 = mysqli_query($con, $sel1);
 if ($res1) {
 while ($row1 = mysqli_fetch_array($res1)) {
echo '<li>'.$row1['Station_name'].'</li>';
 }
 }
 ?>
</ol>
  <ol class="timeline" style="background:blue;">
 <?php
 $con = mysqli_connect('localhost', 'root', '', "smart_bus");
 $sel2 = "SELECT * FROM station where Station_id >=6 and Station_id <=10";
 $res2 = mysqli_query($con, $sel2);
 if ($res2) {
     while ($row2 = mysqli_fetch_array($res2)) {
         echo '<li>'.$row2['Station_name'].'</li>';
     }
 }
 ?>
</ol>
 <ol class="timeline" style="background:black;" >
     <?php
     $con = mysqli_connect('localhost', 'root', '', "smart_bus");
     $sel3 = "SELECT * FROM station where Station_id >=11";
     $res3 = mysqli_query($con, $sel3);
     if ($res3) {
         while ($row3 = mysqli_fetch_array($res3)) {
             echo '<li>'.$row3['Station_name'].'</li>';
         }
     }
     ?>
</ol>
        </div>
        <div class="icon">
            <h1 class="title">our offers </h1>
            <ul class="popin">
                <li>
                   <div class="membership-type">
                       <img src="images/Basic.png">
                    <p class="bold">Individual</p>
                   </div>
                    <div class="ticket">
                    <h1 class="blue">5 LE</h1>
                    <h4>Basic Ticket</h4>
                    </div>
                    <p class="para">
                        Full Day Access <br>
                    Including a variety of Sports,<br>
                   Athletic Activities &amp; lots of FUN !
                    </p>
                </li>
                 
                  <li>
                   <div class="membership-type">
                       <img src="images/Cycling.png">
                    <p class="bold">Individual</p>
                   </div>
                    <div class="ticket">
                    <h1 class="golden">8 LE</h1>
                    <h4>golden Ticket</h4>
                    </div>
                    <p class="para">
                        Full Day Access<br>
                        + 10 Km CYCLYING RIDE !
                        <br>
                        <br>
                    </p>
                </li>
                 <li>
                   <div class="membership-type">
                       <img src="images/Football.png">
                    <p>Participation</p>
                   </div>
                    <div class="team">
                    <h1>
                        trip  <br>
                        REGISTRATION <br>
                    </h1>
                    </div>
                    <p class="note">
                        note that every member<br>
                        should own indivdual ticket !
                    </p>
                     <?php
                     echo  '<button class="btn"><a href="chooseroute.php">register your ticket </a></button>';
                     ?>

                </li>
                
            </ul>
        </div>
        <div class="book-ways" style="background-size:auto; ">
           <ul class="popin">
               <li>
                   <h3>
                       charge your account by 
                   </h3>
                 <a href="charage.php">
                  <img src="images/arabic-logo.png" height="64px">
                  </a>
               </li>
                  <li>
                   <h3>
                     give us ur feedback <br>
                      </h3>
                      <h3>

                <a href="feed.php" style="color: blue;"> click here</a>

                   <br>
                   <br>
                   </h3>
               </li>
           </ul>
            
        </div>
        <div class="foot">
        <h2>
            Smart Bus SuppoRteRs
        </h2>
        <p class="rights">
            &#64;2019 all right reserve to Smart Bus Team
        </p>
        </div>
    </body>
</html