<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * From r_encuesta";
    $r=mysqli_query($con,$sql);

    $sql1 = "SELECT COUNT(mayorEdad)  FROM r_encuesta where mayorEdad='Si'";
    $r1=mysqli_query($con,$sql1);

    $sql2 = "SELECT COUNT(mayorEdad)  FROM r_encuesta where mayorEdad='No'";
    $r2=mysqli_query($con,$sql2);

    $sql3 = "SELECT COUNT(Sabor)  FROM r_encuesta where Sabor='Excelente'";
    $r3=mysqli_query($con,$sql3);

    $sql4 = "SELECT COUNT(Sabor)  FROM r_encuesta where Sabor='Muy bien'";
    $r4=mysqli_query($con,$sql4);

    $sql5 = "SELECT COUNT(Sabor)  FROM r_encuesta where Sabor='Bien'";
    $r5=mysqli_query($con,$sql5);

    $sql6 = "SELECT COUNT(Sabor)  FROM r_encuesta where Sabor='Regular'";
    $r6=mysqli_query($con,$sql6);

    $sql7 = "SELECT COUNT(Sabor)  FROM r_encuesta where Sabor='Malo'";
    $r7=mysqli_query($con,$sql7);

    $sql8 = "SELECT COUNT(Calidad)  FROM r_encuesta where Calidad='Excelente'";
    $r8=mysqli_query($con,$sql8);

    $sql9 = "SELECT COUNT(Calidad)  FROM r_encuesta where Calidad='Muy bien'";
    $r9=mysqli_query($con,$sql9);

    $sql10 = "SELECT COUNT(Calidad)  FROM r_encuesta where Calidad='Bien'";
    $r10=mysqli_query($con,$sql10);

    $sql11 = "SELECT COUNT(Calidad)  FROM r_encuesta where Calidad='Regular'";
    $r11=mysqli_query($con,$sql11);

    $sql12 = "SELECT COUNT(Calidad)  FROM r_encuesta where Calidad='Malo'";
    $r12=mysqli_query($con,$sql12);

    $sql13 = "SELECT COUNT(Presentacion)  FROM r_encuesta where Presentacion='Excelente'";
    $r13=mysqli_query($con,$sql13);

    $sql14 = "SELECT COUNT(Calidad)  FROM r_encuesta where Presentacion='Muy bien'";
    $r14=mysqli_query($con,$sql14);

    $sql15 = "SELECT COUNT(Presentacion)  FROM r_encuesta where Presentacion='Bien'";
    $r15=mysqli_query($con,$sql15);

    $sql16 = "SELECT COUNT(Presentacion)  FROM r_encuesta where Presentacion='Regular'";
    $r16=mysqli_query($con,$sql16);

    $sql17 = "SELECT COUNT(Presentacion)  FROM r_encuesta where Presentacion='Malo'";
    $r17=mysqli_query($con,$sql17);

    $sql18 = "SELECT COUNT(Recomendacion)  FROM r_encuesta where Recomendacion='Si'";
    $r18=mysqli_query($con,$sql18);

    $sql19 = "SELECT COUNT(Recomendacion)  FROM r_encuesta where Recomendacion='No'";
    $r19=mysqli_query($con,$sql19);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Registros</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <?php 
        include("./components/navbar.html");
    ?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Pregunta
                </th>
                <th scope="col" class="px-6 py-3">
                    Total
                </th>
            </tr>
        </thead>
        <tbody>
            <?php   
                while($row=mysqli_fetch_array($r1)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Mayor Edad'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r2)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Mayor Edad'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r2)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Menor Edad'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r3)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Sabor Excelente'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r4)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Sabor Muy bien'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r5)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Sabor Bien'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r6)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Sabor Regular'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r7)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Sabor Malo'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r8)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Calidad Excelente'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r9)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Calidad Muy bien'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r10)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Calidad Bien'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r11)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Calidad Regular'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r12)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Calidad Malo'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r13)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Presentacion Excelente'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r14)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Presentacion Muy bien'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r15)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Presentacion Bien'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r16)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Presentacion Regular'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r17)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Presentacion Malo'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r18)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Recomendaciones negativas'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
            <?php   
                while($row=mysqli_fetch_array($r19)) { ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo 'Recomendaciones Positivas'?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row[0]?>    
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>