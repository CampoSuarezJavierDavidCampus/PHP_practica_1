<?php
    namespace DB;
    class MyDB{
        static function getData():string{
            $products = [
                [
                    'nombre'=>'Tablet',
                    'precio'=>200,
                    'disponible'=>true
                ],
                [
                    'nombre'=>'televisor 24"',
                    'precio'=>300,
                    'disponible'=>true
                ],
                [
                    'nombre'=>'mnonitor curvo',
                    'precio'=>400,
                    'disponible'=>false
                ],
                [
                    'nombre'=>'ps5',
                    'precio'=>500,
                    'disponible'=>true
                ]
            ];
            $json = json_encode($products,JSON_UNESCAPED_UNICODE);
            return $json;
        }
    }

?>