<?php
session_start();
require_once('incs/config.php');
$id = $_SESSION['id'];

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    
    $fileName =$file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg','jpeg','png','pdf');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination ='images/uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sqli = "UPDATE profile_img SET status=0 WHERE user_id ='$id'";
                mysqli_query($mysqli,$sqli);
                header('Location:acc.php');
            }else{
                echo 'OOPS something went wrong';
            }
        }
    }
    
}

?>