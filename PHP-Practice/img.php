<?php
if(isset($_POST["submit_btn"]))
{
    $img_name = $_FILES['upload_img']['name'];
    $tmp_name = $_FILES['upload_img']['tmp_name'];
    move_uploaded_file($tmp_name, "upload/".$img_name);
}
?>

<h2>Image:</h2>  
<img src="upload/<?php if(isset($img_name)){echo $img_name;} ?>">