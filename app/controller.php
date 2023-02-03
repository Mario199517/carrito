<?php
session_start();
class Carrito{
    public static function addCart($name, $idItem, $idprice){
        //ARRAY DEL CARRITO
        $nuevoProducto = array();

        //DATA DEL CARRITO
        $nuevoProducto['name']      = $name;
        $nuevoProducto['idItem']    = $idItem;
        $nuevoProducto['precio']    = $idprice;

        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito']=array();
        }

        //AGREGAR ITEM AL CARRITO
        array_push($_SESSION['carrito'], $nuevoProducto);
        
        return print_r($_SESSION['carrito']);
    }

    public static function delate($item_indice){
        $_SESSION['carrito'];        
        unset($_SESSION['carrito'][$item_indice]);     
         
    }

    public static function showCart(){
        $items = $_SESSION['carrito'];
        $countCart = count($items);
        $html = '';

        foreach($items as $elemento => $descripcion){
            $html .= '<tr>
                        <td>'.$descripcion['name'].'</td>
                        <td>1</td>
                        <td class="text-center">$ '.number_format($descripcion['precio'],2) .'</td>
                        <td class="text-center"><button class="btndteled" data-item="'.$elemento.'"><span class="spanremove">Eliminar</span> <i class="fa fa-times"></i></<button></td>
                    </tr>';            
        }        
        return $html;
    }

    public static function totalPagar(){
        $items = $_SESSION['carrito'];
        $countCart = count($items);
        $total = '';

        foreach($items as $elemento => $descripcion){
            $total = ((int)$total) + $descripcion['precio'];            
        }        
        return $total;
    }
}