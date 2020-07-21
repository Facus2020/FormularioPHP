<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobación</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <!-- A la función copy le pasamos dos argumentos:
    La variable $_FILES['archivo']['tmp_name'], que guarda el archivo de modo temporal, 
    en una carpeta de archivos temporales. Estos son borrados al cerrar el navegador.

    La variable $_FILES['archivo']['name'], que es la que guarda el archivo en de forma permanente 
    en el mismo directorio en que tenemos la página de recogida.

    ['archivo'] lo llamamos así porque es el valor que le hemos dado al atributo name en el formulario.

    Debemos poner los dos tipos de archivo a guardar, tanto el temporal como el permanente, 
    ya que la instruccion copy así lo requiere. -->
    
    <?php
        copy($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
        echo "IMAGEN SUBIDA CORRECTAMENTE.";

        //si quiero mostrar la imagen que envié en la primera página, debo llamar al archivo permanente.

        $imagen = $_FILES['archivo']['name'];
        echo "<p>Tu imagen es :<br><img src=\"$imagen\"></p>";        
    ?>
</body>
</html>

