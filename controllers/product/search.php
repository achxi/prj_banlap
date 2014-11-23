<?php
$title= "achxi latop - tim kiem san pham theo ten";
$product= new product;
$keyword= $_POST['keyword'];
$data= $product->search($keyword);

require_once 'views/product/search_view.php';
