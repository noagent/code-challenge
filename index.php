<?php
// include required files 
require_once "product.php";
require_once "cart.php";
require_once "cartItem.php";

// List of available products 
//$product = new Product();
$product1 = new Product('P001', "Photography", 200, 1);
$product2 = new Product('P002', "Floorplan", 100, 1);
$product3 = new Product('P003', "Gas Certificate", 83.50, 1);
$product4 = new Product('P004', "EICR Certificate", 51.00, 1);

// product quanity 
$quantity = 1; 
// initiate cart 
$cart = new Cart();
$cartItem1 = $cart->addProduct($product1, $quantity);
$cartItem2 = $product2->addToCart($cart, $quantity);
$cartItem3 = $product3->addToCart($cart, $quantity);
$cartItem4 = $product4->addToCart($cart, $quantity);



echo "Total Item: </br>";
echo $cart->getTotalQuantity()."</br>"; 
echo "Total: </br>";
echo '£'.$cart->getTotalSum()."</br>"; 
