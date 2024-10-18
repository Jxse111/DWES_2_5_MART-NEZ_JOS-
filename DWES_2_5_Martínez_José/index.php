<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    </form>
    <?php
    print_r($_GET);
    ?>
    <br>
    <?php
    if (!isset($_GET["nombre"]) && empty($_GET["nombre"]) || !isset($_GET["edad"]) && empty($_GET["edad"]) 
            || !isset($_GET["sexo"]) && empty($_GET["sexo"]) || !isset($_GET["aficiones"]) 
            && empty($_GET["aficiones"]) || empty($_GET["provincias"]) &&  $_GET["provincias"] == 0) {
       echo ("ERROR: No puede haber campos vacíos en el formulario.");
    } else {
        echo ("El usuario ".$_GET["nombre"]." se ha registrado correctamente en nuestra sede de la provincia de ".$_GET["provincias"]);
    }
    ?>
    <br>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method = "get">
        <label>Introduce un nombre: <input type = "text" name="nombre"> <br><br> 
            <label>Introduce una edad: <input type ="text" name="edad"><br><br> 
                <label>Introduce un sexo: <br><br>
                    <input type="radio" name="sexo" value="mujer" >Mujer<br><br>
                    <input type="radio" name="sexo" value="hombre">Hombre<br><br>
                    <label">Introduce tus aficiones: <br><br>
                        <input type="checkbox" name="aficiones[]" value="deportes" <?php if (in_array("deportes", $_GET)) echo "checked"; ?>> Deportes
                        <input type="checkbox" name="aficiones[]" value="musica">Música
                        <input type="checkbox"  name="aficiones[]" value="alimentacion">Alimentación
                        <input type="checkbox" name="aficiones[]" value="moda">Moda<br><br>
                        <label>Seleccion la provincia:
                            <select name="provincias"> 
                                <option value="0" Selected = "selected">Seleccione una opción</option>
                                <option value="Almería">Almería</option>
                                <option value="Granada">Granada</option>
                                <option value="Córdoba">Córdoba</option>
                                <option value="Jaen">Jaén</option>
                                <option value="Sevilla">Sevilla</option>
                                <option value="Huelva">Huelva</option>
                                <option value="Malaga">Málaga</option>
                            </select>
                            <button type="submit" name="enviar" >Enviar</button>
                            </body>
                            </html>