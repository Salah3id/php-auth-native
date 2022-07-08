<?php
include_once("framework/config.php");
           session_start();
           if(isset($_POST["image"]))
{
 $data = $_POST["image"];

 $image_array_1 = explode(";", $data);

 $image_array_2 = explode(",", $image_array_1[1]);

 $data = base64_decode($image_array_2[1]);

 $imageName = time() .'_'.$_SESSION['user_id'] . '.png';

 file_put_contents($imageName, $data);
 rename($imageName, 'img/users/'.$imageName);
 $user_id = $_SESSION['user_id'];
 if($_SESSION['user_img'] != 'admin.png') {
    $img_name = $_SESSION['user_img'];
    unlink('img/users/'.$img_name);
 }
 $result = mysqli_query($con,"UPDATE `users` SET `user_img`= '$imageName' WHERE user_id = '$user_id'");
 $result2 = mysqli_query($con,"SELECT * FROM users WHERE user_id='$user_id'");
 $row = mysqli_fetch_array($result2);
 $_SESSION['user_img'] = $row['user_img'];
 $img_src= 'img/users/'.$_SESSION['user_img'];
 echo '<img src="'.$img_src.'" class="img-circle img-thumbnail" />';
}
?>