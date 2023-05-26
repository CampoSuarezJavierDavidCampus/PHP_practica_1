<?php
    include_once('db.php');
    use DB\{Producto,Almacen};
    $almacen = new Almacen();
    $myProduct = new Producto('televisor',100,400);
    $myProductSecond = new Producto('tablet apple',500,100);    
    $newProduct = new Producto('azucar',0,1000);
    $almacen->set_producto($myProduct);
    $almacen->set_producto($myProductSecond);    
    $almacen->set_producto($newProduct);    
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
        <br>
        <br>
        <hr>

        <thead>
            <tr>
                <th>productos</th>
            </tr>
        </thead>
        <tbody> 
            <?php    
                echo $almacen->get_productos();
            ?>

        </tbody>
    </table>
    


  </body>
</html>