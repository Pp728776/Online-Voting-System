
<?php
    include("connection.php");

    $name = $_POST['name'];
    $scholarno = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($cpass!=$pass){
        
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
    }
    else{
        // $hash = password_hash($pass, PASSWORD_DEFAULT);
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect, "insert into user (name, scholarno, password, address, photo, status, votes, role) values('$name', '$scholarno', '$pass', '$add', '$image', 0, 0, '$role') ");
        if($insert){
         
            echo '<script>
           
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
    
?>