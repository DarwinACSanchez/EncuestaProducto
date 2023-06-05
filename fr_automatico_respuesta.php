<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario Registros</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <?php 
        include("./components/navbar.html");
    ?>
    <h1 class="text-center font-bold font-sans text-2xl mt-8">Generación automática de respuestas</h1>

    <div class="w-96 mx-auto mt-6">
        <form action="r_automatico_respuestas.php" method="POST">
            <label for="lista" class="block mb-2 text-sm font-bold text-gray-900">Numero de respuesta registrar:</label>
            <input type="text" id="numero" name="numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="numero" required>

            <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 mt-4 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Continuar
                </span>
            </button>
        </form>
    </div>
</body>
</html>