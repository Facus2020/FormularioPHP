<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos enviados</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
            
    <form method = "post" action = "devolucion.php" > <br><br>
    <h2>FORMULARIO DE LIBROS</h2>
        <p><label><b><u>TITULO DEL LIBRO: <br></p></label> <input = "text" name = "Titulo" class="field"> </fieldset></u></b> <br><br>
        <p><label><b><u>AUTOR DEL LIBRO: <br></p></label> <input = "text" name = "Autor" class="field"> </u></b><br><br>
        <p><label><b><u>EDITORIAL: <br></p></label> <input = "text" name = "Editorial" class="field"> </u></b><br><br>
        <p><label><b><u>AÑO DE PUBLICACION: <br></p></label> <input = "number" name = "Año" class="field"> </u></b><br><br>
        <p><label><b><u>RESUMEN: <br></p></label> <input = "text" name = "Descripcion" class="field"> </u></b><br><br>

        <p><input type = "submit" value = "ENVIAR EL FORMULARIO" name = "submit" class="btn btn-green"></p>
        
    <?php

    //validaciones del formulario en el usuario

    if(isset($_POST["submit"])) {

        if(empty($_POST["Titulo"])){
           $errores[] = "Agregue el Titulo del Libro";
        }
        if(empty($_POST["Autor"])){
           $errores[] = "Agregue el Autor";
        }
        if(empty($_POST["Editorial"])){
           $errores[] = "Agregue la Editorial";
        }
        if(empty($_POST["Año"])){
           $errores[] = "Agregue el año";
        }
        if(empty($_POST["Descripcion"])){
           $errores[] = "Agregue una breve descripción";
        }        
    }

    
    ?>    
    <!-- Página de envio: Como vamos a crear a continuación la página "enviar.php" en la que recogeremos 
    los datos mediante el metodo "post"; en la etiqueta form pondremos los atributos action="enviar.php" 
    y method="post".
    Tipo de archivo: Para indicar que el tipo de archivo enviado es multimedia, escribiremos también 
    el atributo enctype="multipart/form-data" el cual llevará siempre el mismo valor.
    Guardar el archivo: Para que el archivo pueda guardarse debemos poner el atributo name="archivo" 
    que será la referencia para la variable donde se guarde el archivo en la página de envio.
    Campo de formulario; El campo será de tipo input con el atributo tipe="file", lo cual indica que lo que 
    se manda es un archivo.
    Envio del formulario: Por último enviamos el formulario a la página donde va a ser tratado mediante 
    el campo input type="submit" -->

    </form>
    <form action="enviar.php" method="post" name="archivo" enctype="multipart/form-data">
        
        <p><input type="file" name="archivo" / class="btn btn-red"></p>

        <p><input type="submit" value="SUBIR ARCHIVO" / class="btn btn-blue"></p>
    </form>
    
</body>
</html>