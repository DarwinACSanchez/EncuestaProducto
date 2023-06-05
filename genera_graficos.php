<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficos</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
  <?php 
    include("./components/navbar.html");
  ?>
    <h1 class="text-center font-bold font-sans text-2xl mt-8">Reportes de Graficos</h1>

    <div class="w-96 mx-auto mt-6 " >
      <form action="genera_graficos.php" method="post">
          <label for="lista" class="block mb-2 text-sm font-bold text-gray-900">Grafico a Generar<noscript></noscript></label>
          
          <select name="grafico" id="grafico" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          <option value="">Seleccione...</option>
            <option value="1">Personas Mayores de edad</option>
            <option value="2">Calificación del sabor</option>
            <option value="3">Calificación de la calidad </option>
            <option value="4">Calificación de la presentación</option>
            <option value="5">Recomendaciones</option>
          </select>

          <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
          <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
              Seleccionar
          </span>
        </button>
      </form>
    </div>
    <div class="font-bold" style="width: 730px; margin: 20px auto; font-family:sans-serif;">
</body>
</html>

<?php

include 'conexion.php';
$con=conectar();

/** Include class */
include( 'GoogChart.class.php' );

/** Create chart */
$chart = new GoogChart();

if (isset($_POST['grafico'])) {
  $opcion = $_POST['grafico'];

  switch ($opcion) {
    case '1':
      $sql="SELECT * FROM r_encuesta";
      $respuesta = $con->query($sql);

      $query1="SELECT COUNT(mayorEdad) FROM r_encuesta where mayorEdad='Si'";
      $sql1= mysqli_query($con, $query1);
      $r1 = mysqli_fetch_array($sql1);
  
      $query2="SELECT COUNT(mayorEdad) FROM r_encuesta where mayorEdad='No'";
      $sql2= mysqli_query($con, $query2);
      $r2 = mysqli_fetch_array($sql2);

        $data = array( 
          'Mayores de edad' => $r1[0],
          'Menores de edad' => $r2[0],
        );
        $color = array(
          '#2192FF',
          '#16FF00',
        );

        /* # Chart 2 # */
        echo '<h3>Promedio de la Edad de las Personas</h3>';
        $chart->setChartAttrs( array(
          'type' => 'pie',
          'title' => 'Total',
          'data' => $data,
          'size' => array( 600,400 ),
          'color' => $color
        ));
        // Print chart
        echo $chart;
      break;
    case '2':
      $sql="SELECT * FROM r_encuesta";
      $respuesta = $con->query($sql);

      $query1="SELECT COUNT(Sabor) FROM r_encuesta where Sabor='Excelente'";
      $sql1= mysqli_query($con, $query1);
      $r1 = mysqli_fetch_array($sql1);
  
      $query2="SELECT COUNT(Sabor) FROM r_encuesta where Sabor='Muy bien'";
      $sql2= mysqli_query($con, $query2);
      $r2 = mysqli_fetch_array($sql2);

      $query3="SELECT COUNT(Sabor) FROM r_encuesta where Sabor='Bien'";
      $sql13= mysqli_query($con, $query3);
      $r3 = mysqli_fetch_array($sql13);
  
      $query4="SELECT COUNT(Sabor) FROM r_encuesta where Sabor='Regular'";
      $sql4= mysqli_query($con, $query4);
      $r4 = mysqli_fetch_array($sql4);

      $query5="SELECT COUNT(Sabor) FROM r_encuesta where Sabor='Malo'";
      $sql5= mysqli_query($con, $query5);
      $r5 = mysqli_fetch_array($sql5);

        $data = array( 
          'Excelente' => $r1[0],
          'Muy bien' => $r2[0],
          'Bien' => $r3[0],
          'Regular' => $r4[0],
          'Malo' => $r5[0],
        );
        $color = array(
          '#2192FF',
          '#16FF00',
          '#F90716',
          '#FFFF00',
          '#590696',
        );

        /* # Chart 2 # */
        echo '<h3>Promedio Calificación del Sabor</h3>';
        $chart->setChartAttrs( array(
          'type' => 'pie',
          'title' => 'Total',
          'data' => $data,
          'size' => array( 600,400 ),
          'color' => $color
        ));
        // Print chart
        echo $chart;
      break;
    case '3':
      $sql="SELECT * FROM r_encuesta";
      $respuesta = $con->query($sql);

      $query1="SELECT COUNT(Calidad) FROM r_encuesta where Calidad='Excelente'";
      $sql1= mysqli_query($con, $query1);
      $r1 = mysqli_fetch_array($sql1);
  
      $query2="SELECT COUNT(Calidad) FROM r_encuesta where Calidad='Muy bien'";
      $sql2= mysqli_query($con, $query2);
      $r2 = mysqli_fetch_array($sql2);

      $query3="SELECT COUNT(Calidad) FROM r_encuesta where Calidad='Bien'";
      $sql13= mysqli_query($con, $query3);
      $r3 = mysqli_fetch_array($sql13);
  
      $query4="SELECT COUNT(Calidad) FROM r_encuesta where Calidad='Regular'";
      $sql4= mysqli_query($con, $query4);
      $r4 = mysqli_fetch_array($sql4);

      $query5="SELECT COUNT(Calidad) FROM r_encuesta where Calidad='Malo'";
      $sql5= mysqli_query($con, $query5);
      $r5 = mysqli_fetch_array($sql5);

        $data = array( 
          'Excelente' => $r1[0],
          'Muy bien' => $r2[0],
          'Bien' => $r3[0],
          'Regular' => $r4[0],
          'Malo' => $r5[0],
        );
        $color = array(
          '#2192FF',
          '#16FF00',
          '#F90716',
          '#FFFF00',
          '#590696',
        );

        /* # Chart 2 # */
        echo '<h3>Promedio Calificación de la Calidad</h3>';
        $chart->setChartAttrs( array(
          'type' => 'pie',
          'title' => 'Total',
          'data' => $data,
          'size' => array( 600,400 ),
          'color' => $color
        ));
        // Print chart
        echo $chart;
      break;
    case '4':
      $sql="SELECT * FROM r_encuesta";
      $respuesta = $con->query($sql);

      $query1="SELECT COUNT(Presentacion) FROM r_encuesta where Presentacion='Excelente'";
      $sql1= mysqli_query($con, $query1);
      $r1 = mysqli_fetch_array($sql1);
  
      $query2="SELECT COUNT(Presentacion) FROM r_encuesta where Presentacion='Muy bien'";
      $sql2= mysqli_query($con, $query2);
      $r2 = mysqli_fetch_array($sql2);

      $query3="SELECT COUNT(Presentacion) FROM r_encuesta where Presentacion='Bien'";
      $sql13= mysqli_query($con, $query3);
      $r3 = mysqli_fetch_array($sql13);
  
      $query4="SELECT COUNT(Presentacion) FROM r_encuesta where Presentacion='Regular'";
      $sql4= mysqli_query($con, $query4);
      $r4 = mysqli_fetch_array($sql4);

      $query5="SELECT COUNT(Presentacion) FROM r_encuesta where Presentacion='Malo'";
      $sql5= mysqli_query($con, $query5);
      $r5 = mysqli_fetch_array($sql5);

        $data = array( 
          'Excelente' => $r1[0],
          'Muy bien' => $r2[0],
          'Bien' => $r3[0],
          'Regular' => $r4[0],
          'Malo' => $r5[0],
        );
        $color = array(
          '#2192FF',
          '#16FF00',
          '#F90716',
          '#FFFF00',
          '#590696',
        );

        /* # Chart 2 # */
        echo '<h3>Promedio Calificación de la Presentación</h3>';
        $chart->setChartAttrs( array(
          'type' => 'pie',
          'title' => 'Total',
          'data' => $data,
          'size' => array( 600,400 ),
          'color' => $color
        ));
        // Print chart
        echo $chart;
      break;
    case '5':
      $sql="SELECT * FROM r_encuesta";
      $respuesta = $con->query($sql);

      $query1="SELECT COUNT(Recomendacion) FROM r_encuesta where Recomendacion='Si'";
      $sql1= mysqli_query($con, $query1);
      $r1 = mysqli_fetch_array($sql1);
  
      $query2="SELECT COUNT(Recomendacion) FROM r_encuesta where Recomendacion='No'";
      $sql2= mysqli_query($con, $query2);
      $r2 = mysqli_fetch_array($sql2);

        $data = array( 
          'Positivas' => $r1[0],
          'Negativas' => $r2[0],
        );
        $color = array(
          '#2192FF',
          '#16FF00',
        );

        /* # Chart 2 # */
        echo '<h3>Promedio de la Recomendación del Producto</h3>';
        $chart->setChartAttrs( array(
          'type' => 'pie',
          'title' => 'Total',
          'data' => $data,
          'size' => array( 600,400 ),
          'color' => $color
        ));
        // Print chart
        echo $chart;
      break;     
  }
}
?>