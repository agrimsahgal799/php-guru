<?php
session_start();

$target_dir = "files/";
$uploadOk = 1;
$error_msg = ''; 
$success_msg = ''; 
$target_file = '';
$file_type = '';

if(isset($_FILES['file']['name']) && $_FILES['file']['name']!=''){
    echo '<pre>';
    print_r($_FILES);
    $image_size = getimagesize($_FILES['file']['tmp_name']);
    if($image_size == false){
        $uploadOk = 0;
        $error_msg = 'File is not an image.';    
    }
    else{
        $uploadOk = 1;
        $path_parts = pathinfo($_FILES['file']['name']);
        //print_r($path_parts);
        $name = $path_parts['filename'];        
        $name = strtolower($name);
        $name = str_replace(" ","_",$name);
        $name = $name.'_'.time();
        $ext = $path_parts['extension'];
        $target_file = $target_dir.$name.'.'.$ext;
        $file_type = $ext;
    }
}
else{
    $uploadOk = 0;
    $error_msg = 'Please select file to upload.';    
}

if(file_exists($target_file)){
    $uploadOk = 0;
    $error_msg = 'File already exists.';    
}

// Allow certain file formats (optional)
$allowed_types = ['jpg', 'png', 'jpeg', 'gif'];
if(!in_array($file_type, $allowed_types)) {
    $error_msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $success_msg = "The file ". htmlspecialchars(basename($_FILES["file"]["name"])). " has been uploaded.";
    } else {
        $error_msg = "Sorry, there was an error uploading your file.";
    }
}

if($uploadOk == 0){
    $_SESSION['msg'] = "e_".$error_msg;
    header("Location: upload.php");
}
else{
    $_SESSION['msg'] = "s_".$success_msg;
    header("Location: upload.php");
}