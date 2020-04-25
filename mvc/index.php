<?php
session_start();
// tôi muốn: "tất cả các request tới thư mục mvc phải bắt buộc đi qua file index.php"
// thu thập các url gửi lên project
$url = isset($_GET['url']) ? $_GET['url'] : "/";

require_once './vendor/autoload.php';
require_once './commons/database-config.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
switch ($url) {
    case '/':
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    
    case 'detail':
        $ctr = new HomeController();
        echo $ctr->detail();
        break;
    case 'insert-cate':
        $ctr = new CategoryController();
        echo $ctr->addData();
        break;
    
    case 'update-cate':
        $ctr = new CategoryController();
        echo $ctr->editData();
        break;

    case 'delete-cate':
        $ctr = new CategoryController();
        echo $ctr->delete();
        break;
    case 'list-cate':
        $ctr = new CategoryController();
        echo $ctr->index();
        break;
    
    case 'contact':
        $ctr = new HomeController();
        echo $ctr->contact();
        break;

    case 'add-product':
        $ctr = new ProductController();
        echo $ctr->addForm();
        break;
    default:
        echo "Đường dẫn không tồn tại";
        break;
}

?>