<?php
    include_once('db.php');
    use DB\{Producto,Almacen};
    $almacen = new Almacen();
    $producto1 = new Producto('televisor',100,400);
    $producto2 = new Producto('tablet apple',500,100);    
    $producto3 = new Producto('azucar',0,1000);
    $almacen->set_producto($producto1);
    $almacen->set_producto($producto2);    
    $almacen->set_producto($producto3);    
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
                <th>id</th>
                <th>nombre</th>
                <th>precio</th>
                <th>cantidad</th>                
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