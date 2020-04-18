<?php
// 1. Khái niệm & viết code demo cho tính chất trừu tượng trong OOP
// 2. định nghĩa & lấy ví dụ cho khái niệm hàm khởi tạo
// 3. nêu định nghĩa, lấy ví dụ & so sách gữa static method & method bình thường trong class 
// OOP - phương pháp lập trình theo đối tượng - làm việc với các class
// Mỗi class <=> 1 đối tượng trong đề bài <=> 1 kiểu dữ liệu mới
// lợi ích: 
// - tái sử dụng code tốt hơn
// - mở rộng dự án tốt
// - tăng tính bảo mật của dự án
// - phát triển & sử dụng các framework => phát triển hệ thống nhanh hơn

// đối tượng - class
class ConVit{

    // thuộc tính/attribute
    var $maso;
    var $cannang;
    var $ngaysinh;
    var $masochuong;

    // phương thức/method/action
    // $this = thực thể đang thực thi hành động
    function an(){
        echo "con vit co ma so ". $this->maso ." dang an";
    }

    function xuatchuong(){
        // tinh toan thời gian từ ngày sinh đến thời gian ngày bán
        $x = 100;
        echo "Con vit co ma so " . $this->maso 
        . ", can nang " . $this->cannang 
        . ", sinh trưởng trong " . $x . " ngày".
        " đã xuất chuồng ";

    }

    function choAn($luongthucan){
        $this->cannang += $luongthucan; 
    }
}

// cá thể/thực thể/instance
$vinh = new ConVit();
$vinh->maso = "cv0001";
$vinh->cannang = 2;
$vinh->ngaysinh = '2019-11-03';
$vinh->masochuong = '003';

$trung = new ConVit();
$trung->maso = "cv0004";
$trung->cannang = 2.5;
$trung->ngaysinh = '2019-10-25';
$trung->masochuong = '006';

// var_dump($vinh);
$vinh->an();
echo "<br>";
$trung->an();





?>