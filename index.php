<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="output.css"> 
</head>
<body>
  <?php 
    include("./components/navbar.html");
  ?>
    <h1 class="text-center font-bold font-sans text-2xl mt-8">Califique nuestro Producto</h1>

    <div class="w-96 mx-auto mt-6">
      <form action="Insertar_r.php" method="post">
        <label for="lista" class="block mb-2 text-sm font-bold text-gray-900">¿Es usted mayor de edad?</label>
        <select name="mayorEdad" id="mayorEdad" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          <option value="">Seleccione...</option>
          <option value="Si">Si</option>
          <option value="No">No</option>
        </select>

        <label for="lista" class="block mb-2 text-sm font-bold text-gray-900">¿Qué le parece el sabor de nuestro producto?</label>
        <select name="sabor" id="sabor" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          <option value="">Seleccione...</option>
          <option value="Excelente">Excelente</option>
          <option value="Muy bien">Muy bien</option>
          <option value="Bien">Bien</option>
          <option value="Regular">Regular </option>
          <option value="Malo">Malo</option>
        </select>

        <label for="lista" class="block mb-2 text-sm font-bold text-gray-900">¿Cómo considera la calidad de nuestro producto?</label>
        <select name="calidad" id="calidad" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          <option value="">Seleccione...</option>
          <option value="Excelente">Excelente</option>
          <option value="Muy bien">Muy bien</option>
          <option value="Bien">Bien</option>
          <option value="Regular">Regular </option>
          <option value="Malo">Malo</option>
        </select>

        <label for="lista" class="block mb-2 text-sm font-bold text-gray-900">¿Es adecuado el formato de la presentación de nuestro producto?</label>
        <select name="presentacion" id="presentacion" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          <option value="">Seleccione...</option>
          <option value="Excelente">Excelente</option>
          <option value="Muy bien">Muy bien</option>
          <option value="Bien">Bien</option>
          <option value="Regular">Regular </option>
          <option value="Malo">Malo</option>
        </select>

        <label for="lista" class="block mb-2 text-sm font-bold text-gray-900">¿Recomendaria nuestro producto?</label>
        <select name="recomendacion" id="recomendacion" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          <option value="">Seleccione...</option>
          <option value="Si">Si</option>
          <option value="No">No</option>
        </select>

        <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
          <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
              Enviar
          </span>
        </button>
      </form>
    </div>
</body>
</html>