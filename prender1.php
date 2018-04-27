

<?php

//header("Location: index.php");

$con = mysqli_connect('35.198.14.135','admin','admin');
if(!$con)
{
 echo 'No se establecio conexión con el servidor';
}
echo 'Paso 1 completo \n';
if (!mysqli_select_db ($con,'maquina'))
{
 echo 'Error al conectar con base de datos \n';
}
echo 'Empezando extracción de datos \n';
$id= $_GET["id"];
$m1 = $_GET['m1'] ;
echo $id;
echo $m1;
echo 'Conectando a base de datos \n';
$sql = "UPDATE maquina.motores SET `m1`=$m1 WHERE `id`=$id";
if (!mysqli_query($con,$sql))
{
 echo 'Error al insertar! Quizás sea tabla errónea!\n\r';
}
else
{
 echo 'Insertación perfecta!\r\n';
}
echo "<script>window.close();</script>";
?>