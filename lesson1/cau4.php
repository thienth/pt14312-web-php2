<?php
// 3. nêu định nghĩa, lấy ví dụ & so sách gữa static method & method bình thường trong class 
class Animal{
    var $name = "Nguyen Ba Vinh";
    function run(){
        echo "Animal Runing is ".$this->name."!";
    }

    static function eat(){
        $model = new static();
        $model->run();
        echo "<br>";
        // không được phép dùng $this
        echo "Animal eating! ";
        echo "<br>";
        var_dump($model);
    }
}

Animal::eat();

// $vinh = new Animal();
// $vinh->run();


?>