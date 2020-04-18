<?php
// 2. định nghĩa & lấy ví dụ cho khái niệm hàm khởi tạo
// Hàm khởi tạo là hàm được gọi ngay lập tức khi tạo ra 1 thực thể mới
class Animal{

    function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        echo "Tạo mới thực thể!<br>";
        var_dump($this);
        echo "<br>";
    }
}

$thienth = new Animal('tran huu thien', 30, 'ha dong');
$nam = new Animal('nguyen van nam', 21, 'ha tay');


?>