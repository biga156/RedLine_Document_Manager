<?php


if (isset($_POST['btSubmit'])) { 
    if (is_uploaded_file($_FILES['fil_src']['tmp_name'])) {
        $fil_name = $_FILES['fil_src']['name'];
        $file_extension = pathinfo($fil_name, PATHINFO_EXTENSION);
        $fil_size = $_FILES['fil_src']['size'];
        $fil_src = 'D:/Storage/Temp/' . $filename;
        $file = $_FILES['fil_src']['tmp_name'];
        $fil_type="na";
        move_uploaded_file($file, $fil_src);
        
    }
}