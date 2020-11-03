<?php


    if($_FILES)
    {
        $name=$_FILES['file_name']['name'];
        if(strstr($name, "png")!==FALSE || strstr($name, "jpeg")!==FALSE || strstr($name, "jpg")!==FALSE || strstr($name, "img")!==FALSE)
        {
            move_uploaded_file($_FILES['file_name']['tmp_name'], $name);
            echo "Kartinka!";
        }
        else
        {
                die("Error 404 Ne kartinka!<a href='index.html'>Return back</a>");

        }
    }
?>





<!--//          singl file-->
<!--//if($_FILES && $_FILES['filename']['error'] == UPLOAD_ERR_OK){-->
<!--//    $name = $_FILES['filename']['name'];-->
<!--//    echo 'локальное имя '.$_FILES['filename']['tmp_name'].'<br/>';-->
<!--//    echo 'размер '.$_FILES['filename']['size'].'<br/>';-->
<!--//    echo 'статус '.$_FILES['filename']['error'].'<br/>';-->
<!--//    move_uploaded_file($_FILES['filename']['tmp_name'], 'files/'.$name);-->
<!--//    echo 'Загружен';-->
<!--//}-->


