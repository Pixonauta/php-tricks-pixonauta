<?php


echo "Saving file...<br>";

$file = $_FILES['fileTest']['name']; //Nombre de nuestro archivo

$fileTemp = $_FILES['fileTest']['tmp_name']; //Ruta temporal a donde se carga el archivo 

// $extensionType = strtolower(pathinfo($file,PATHINFO_EXTENSION));


$url_insert = dirname(__FILE__)."/files";
if (!file_exists($url_insert)) { 
    mkdir($url_insert, 0777, true);
    echo "existe algun archivo";
};

$full_url_insert = str_replace('\\', '/', $url_insert ).'/'. $file;


if (move_uploaded_file($fileTemp, $full_url_insert)) {
    echo "El archivo ". htmlspecialchars( basename($file)). " ha sido cargado con exito.";
  } else {
    echo "Ha habido un error al cargar tu archivo.";
  }



