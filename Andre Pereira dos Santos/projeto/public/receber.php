<?php
if($_FILES):
    $arquivo = $_FILES['imagem'];
    if(move_uploaded_file($arquivo['tmp_name'], "./img/".$arquivo['name'])){
        echo "./img/".$arquivo['name'];
    }else{
        echo "erro";
    }
endif
?>