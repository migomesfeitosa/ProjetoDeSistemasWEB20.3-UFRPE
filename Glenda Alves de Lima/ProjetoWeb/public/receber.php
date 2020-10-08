<?php
if($_FILES):
    $arquivo = $_FILES['documento'];
    if(move_uploaded_file($arquivo['tmp_name'], "upload/".$arquivo['name'])){
        echo "upload/".$arquivo['name'];
    }else{
        echo "erro";
    }
endif
?>