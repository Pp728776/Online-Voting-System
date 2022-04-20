
<?php
  require('C:\xampp\htdocs\navbar.php');

?>
<html>
    <head>

        <title>Online voting system </title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body style="background-image: url(../img/1.jpg) ";>
          
            <center>
            <div id="headerSection" style=" margin-right:50vh ;">

            <h1>Online Voting System <img src="../img/icons8-ballot-box-with-ballot-48.png" alt=""> </h1>
            </div>

            <hr>
            
             <div id="form" style="background-color: black; width: 650px; opacity: 95%;">
                 <div id="loginSection">
                <img src="../img/icons8-registration-64.png" alt="">
                <h2 style="color: red"> Admin Login </h2>
                <div class=" form " >
                    <form action="api/Adminlogin.php" method="POST">
                    <input type="text" name="mob" placeholder="Enter scholarno" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                                      
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                  <!--   New user? <a href="routes/register.php">Register here</a> -->
                </form>
                    
                </div>
             </div> 


             </div>
           

            

            </center> 
    </body>
</html>