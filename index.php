<html>
    <head>
<!--        <link rel="stylesheet" href="style.css">-->
        <link rel="stylesheet" href="st.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="jquery-3.3.1.min.js">
        </script>
    </head>
    <body>
        <header>
           <div class="bg">
               <img src="images/bg.png">
           </div>
           <div class="from">
           <h1>welcome to smart bus </h1>
               <button id="sup">sgin up </button>
               <button id="sin">sgin in </button>
            <form action="sgin.php" method="post" enctype="multipart/form-data" id="from1">
             <div class="block">
              <i class="fas fa-user-circle sub"></i>
               <input name="name" type="text" placeholder="user name" required>
               </div>
               <div class="block" >
               <i class="fas fa-envelope-square sub"></i>
                <input name="email" placeholder="mail" type="email" required>
                </div>
                 <div class="block" >
               <i class="fas fa-phone sub"></i>
                <input name="phone" placeholder="phone" type="number" required>
                </div>
                <div class="block">
                <i class="fas fa-key sub"></i>
                <input name="password" placeholder="password" type="password" required>
                </div>
                <div>
                <i class="fas fa-ring sub"></i>
                male
                <input name="gender" value="male" type="radio">
                female
                <input name="gender" value="female" type="radio">
               </div>
                <input type="submit" style="background: #309dce; width: 80%; height: 8%;" value="submit" name="submit">
               </form>      
               <form action="login.php" method="post" enctype="multipart/form-data" id="from2">
                <div>
                <input name="type" value="user" type="radio">
                user
                <input name="type" value="admin" type="radio">
                 admin
               </div>
               <div class="block" >
               <i class="fas fa-envelope-square sub"></i>
                <input name="emaillog" placeholder="mail" type="email" required>
                   </div>
                <div class="block">
                <i class="fas fa-key sub"></i>
                <input name="passwordlog" placeholder="password" type="password" required>
                </div>
                <input type="submit" style="background: #309dce; width: 80%; height: 8%;" value="submit"  name="login" >
               </form>    
            </div>
                    <div class="gc">
                <img src="images/green-car.png">
            </div> 
               <div class="redc">
                <img src="images/red-car.png">
            </div>
               <div class="oc">
                <img src="images/orange-car.png">
            </div>
            
        </header>
        <script>
        $("#sin").click(function(){
            $("#from2").show();
            $("#from1").hide();
        });
            $("#sup").click(function(){
            $("#from1").show();
            $("#from2").hide();
        });
        </script>
    </body>
</html>