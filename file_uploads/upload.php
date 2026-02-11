<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Uploads in php</title>
    </head>
    <body>
        <?php 
            if(isset($_SESSION['msg'])){
                $msg = explode("_",$_SESSION['msg']);
                if($msg[0] == 'e'){
                    echo '<div style="color:red;">'.$msg[1].'</div>';
                }
                else{
                    echo '<div style="color:green;">'.$msg[1].'</div>';
                }
                unset($_SESSION['msg']);
            }
        ?>
        <form action="http://localhost/php-guru/file_uploads/do_upload.php" method="post" enctype="multipart/form-data">
            <p>
                <label for="">Select File</label>
                <input type="file" name="file" id="file">
            </p>
            <input type="submit" name="submit" value="Submit">
        </form> 
    </body>
</html>