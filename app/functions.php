<?php
require_once 'controller.php';
$classCarrito = new Carrito();

$name    = $_POST['name'];
$idItem  = $_POST['idItem'];
$idprice = $_POST['idprice'];
$accion  = $_POST['accion'];

switch ($accion) {
    case 'addcart':        
        $add =  $classCarrito -> addCart($name, $idItem, $idprice);
        break;
    case 'delete':        
        $del =  $classCarrito -> delate($idItem);
        break;
    default:
        break;
}