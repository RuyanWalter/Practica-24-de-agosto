<?php 
    include(../)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/booststrap.min.css">

    <style>
        
        .container{
            margin-top: 40px;
            /*font-size: 40px;*/
        }

        /*Esto es para un id esto a nivel de css */
        #alumnos{
            font-size:25px;

        }

    </style>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class= "panel-heading">
                <h4 class = "title">Mostrar Datos</h4>

            </div>
            <div class = "panel-body">
                <table class = "table table-bordered table-striped table-hover table-reponsive" id="alumnos">
                    <tr>
                        <th>Carnet</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        
                    </tr>
                    <?php
                    $consulta = $conexion ->prepare("SELEC * FROM ALUMNOS");
                    $consulta ->execute();

                    while($datos=$consulta-> fetch(PDO::FETCH_OBJ))
                    {
                
                    ?>
                    <tr>
                        <th><?php echo $datos->Carnet?></th>
                        <th><?php echo $datos->Nombre?></th>
                        <th><?php echo $datos->Direccion?></th>
                        
                    </tr>
                    <?php
                    }
                    ?>
                    

                </table>
                
            </div>
        </div>

    </div>    
</body>
</html>