<?php
include "Controller/ProductController.php";

use Controller\ProductController;

// Deklarasikan\ProductController;
$productController = new ProductController;

// Tampilkan hasil kembalian dri method getAllProduct menggunakan echo
echo $productController->getAllProduct();