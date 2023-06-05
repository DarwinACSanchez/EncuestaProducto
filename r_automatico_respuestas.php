<?php
include 'conexion.php';
$con=conectar(); 

$num=$_POST['numero'];

$mayorEdad=['Si','No'];
$sabor=['Excelente','Muy bien','Bien','Regular','Malo'];
$calidad=['Excelente','Muy bien','Bien','Regular','Malo'];
$presentacion=['Excelente','Muy bien','Bien','Regular','Malo'];
$recomendacion=['Si','No'];

for ($i = 1; $i <= $num; $i++) {
	
	$indice=rand(0,1);
	$MayorEdad=$mayorEdad[$indice];

	$indice=rand(0,4);
	$Sabor=$sabor[$indice];
	
	$indice=rand(0,4);
    $Calidad=$calidad[$indice];

	$indice=rand(0,4);
    $Presentacion=$presentacion[$indice];

	$indice=rand(0,1);
    $Recomendacion=$recomendacion[$indice];

	$sql="INSERT INTO r_encuesta (mayorEdad,Sabor,Calidad,Presentacion,Recomendacion) VALUES ('$MayorEdad','$Sabor','$Calidad','$Presentacion','$Recomendacion')";
	$query= mysqli_query($con,$sql);

    if($query){
        $_SESSION['message'] = 'Registro Guardado Exitosamente';
        $_SESSION['message_type'] = 'success';
        Header("Location: index.php");
        
    }
}

?>