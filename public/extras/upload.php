<?php
//Guardar imagen en el servidor
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = rand(100,110) . '.' . $ext;
 $ubicacion = './tmp/'.$name;  
 
 move_uploaded_file($_FILES["file"]["tmp_name"], $ubicacion);
 $location='./extras/tmp/'.$name;
 echo '<img src="'.$location.'" height="350" width="500" class="img-thumbnail" />';
}
?>