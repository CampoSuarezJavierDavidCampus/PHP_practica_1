<?php
    include_once('db.php');
    use DB\{MyDB};

    $json = json_decode(MyDB::getData());
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <table>
        <?php
            var_dump($json); 
        ?>
        <br>
        <br>
        <hr>

        <thead>
            <tr>
                <th>id</th>
                <th>producto</th>
                <th>precio</th>
                <th>disponibilidad</th>
            </tr>
        </thead>
        <tbody> 
            <?php    
                foreach ($json as $key => $producto) {
                    $disponible = $producto->disponible?'disponible':'no disponible';
                    echo <<<HTML
                            <tr>
                                <td>{$key}</td>
                                <td>{$producto->nombre}</td>
                                <td>{$producto->precio}$</td>
                                <td>{$disponible}</td>
                            </tr>
                        HTML;
                }
            ?>

        </tbody>
    </table>
    


  </body>
</html>