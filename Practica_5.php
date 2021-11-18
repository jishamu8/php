
P1.HTML
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Tabla de multiplicación</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Tabla de multiplicación</div>
        <form ACTION="P1.php" METHOD="post">
            Introduce un numéro <input type="text" name="numero">
             <input type="submit" value="Enviar" name="submit">
        </form>
    </body>
</html>

P1.PHP
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
            $numero=$_POST['numero'];
                echo "Tabla de ".$numero."<br>"."<br>";
                for($i=0;$i<=10;$i++){
                echo $numero." x ".$i." = ".($i*$numero)."<br>";
             }
         
        ?>
    </body>
</html>

