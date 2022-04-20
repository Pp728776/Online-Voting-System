
<?php
require('navbar.php');
?>
<html>
    <head>

        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body style="background-image : url(../img/1.jpg) ;  " >
         
            <center>
            <div id="headerSection" style=" margin-right:50vh ;">
          
            <h1 >Online Voting System <img src="../img/icons8-ballot-box-with-ballot-48.png" alt=""> </h1>
                
          
            
            </div>

            <hr>
            
             <div id="form" style="background-color: black; width: 650px; opacity: 95%;">
                 <div id="loginSection">
                <img src="../img/icons8-registration-64.png" alt="">
                <h2 style="color:red ;"> Voter Login </h2>
                <div class=" form" >
                    <form action="api/login.php" method="POST">
                    <input type="number " maxlength="8" name="mob" placeholder="Enter scholar no." required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                  <span style="color: white;"> New user? <a href="routes/register.php">Register here</a></span> 
                </form>
                    
                </div>
             </div> 
             
                
           
            

            </div>
           

            

            </center> 
    </body>
</html>