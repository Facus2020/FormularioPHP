<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Recibidos</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <h2>Mostrar datos enviados</h2>
    
    <?php

    echo "El Titulo del libro es: "; echo $_POST['Titulo'], "<br><br>";
    
    echo  "El Autor del libro es: "; echo $_POST ['Autor'],  "<br><br>";
  
    echo "La Editorial es: "; echo $_POST ['Editorial'], "<br><br>";

    echo "El año de edición es: "; echo $_POST ['Año'],  "<br><br>";

    echo "Breve reseña: "; echo $_POST ['Descripcion'],  "<br><br>";
   
    // Validaciones en el lado del servidor.

    if(isset($_POST["submit"])) {

        if(empty($_POST["Titulo"])){
           $errores[] = "Por favor, ingrese el Titulo del Libro.";
        }
        if(empty($_POST["Autor"])){
           $errores[] = "Por favor, ingrese el Autor del Libro.";
        }
        if(empty($_POST["Editorial"])){
           $errores[] = "Por favor, ingrese la Editorial.";
        }
        if(empty($_POST["Año"])){
           $errores[] = "Por favor, ingrese el año de la edición.";
        }
        if(empty($_POST["Descripcion"])){
           $errores[] = "Por favor, agregue un breve resumen.";
        }
    }
    ?>
    
    <ol>
    <?php if(isset($errores)){
        foreach ($errores as $error){
            echo "<li> $error </li>";
        }
    }    
    ?>
    </ol> 
   
<p><label>Comprueba tus errores, recuerde que puede vuelver a escribirlos.</p></<label>

<p><label>Volver a la página anterior <a href="formulario.php">Volver</a></p></<label>
   
   
</body>
</html>

