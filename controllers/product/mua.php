<?php
$title= "achxi laptop - Giỏ hàng";
$id= $_GET['pid'];
$soluong= $_POST['soluong'];
$product= new product;
$tratien= 0;
  
require_once 'views/product/mua_view.php';