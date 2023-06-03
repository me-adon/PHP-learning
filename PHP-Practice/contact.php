<?php
    if(isset($_POST["submit_btn"]))
    {
        $username = $_POST["user_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $img_name = $_FILES['upload_img']['name'];
        $tmp_name = $_FILES['upload_img']['tmp_name'];
        move_uploaded_file($tmp_name, "upload/".$img_name);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
</head>
<body>
    <h2>Username:</h2> 
        <?php 
        if(isset($username)) 
        echo $username;  
        ?>  
        </br>

        <h2>Email:</h2>
        <?php  
        if(isset($email)) 
        echo $email;  
        ?>    
        </br>

        <h2>Password:</h2>   
        <?php  
        if(isset($password)) 
        echo $password;  
        ?> 
        </br>
        <h2>Image:</h2>  
        <img src="upload/<?php if(isset($img_name)){echo $img_name;} ?>">
</body>
</html>