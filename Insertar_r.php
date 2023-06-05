<?php
include("conexion.php");
$con=conectar(); 

$mayorEdad=$_POST['mayorEdad'];
$sabor=$_POST['sabor'];
$calidad=$_POST['calidad'];
$presentacion=$_POST['presentacion'];
$recomendacion=$_POST['recomendacion'];

$sql="INSERT INTO r_encuesta (mayorEdad,Sabor,Calidad,Presentacion,Recomendacion) VALUES ('$mayorEdad','$sabor','$calidad','$presentacion','$recomendacion')";
$query= mysqli_query($con,$sql);

if($query){
    $_SESSION['message'] = 'Registro Guardado Exitosamente';
    $_SESSION['message_type'] = 'success';
    Header("Location: index.php");
    
}else {
    die("Error al agregar registro");
}
?>