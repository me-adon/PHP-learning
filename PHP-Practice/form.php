<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>

    </br></br>
    <form action="contact.php" method="POST" enctype="multipart/form-data">
        <label> Username </label></br>
        <input type="text" name="user_name"></br>
        <label> Email </label></br>
        <input type="email" name="email"></br>
        <label> Password </label></br>
        <input type="password" name="password"></br>
        </br>
        <input type="file" name="upload_img"><br>
        </br>
        <input type="submit" value="Submit Data" name="submit_btn">
    </form>

    

</body>
</html>