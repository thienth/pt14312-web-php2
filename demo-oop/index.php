<?php
// lấy đc danh sách products từ database & hiển thị danh sách
// lấy danh sách categories & hiển thị
require_once './models/Product.php';
require_once './models/Category.php';

$cateModel = new Category();
$cates = $cateModel->all();
echo "<pre>";
var_dump($cates);

?>