<?php
class Category{
    protected $table = "categories";

    function __construct()
    {
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=poly-mvc;charset=utf8", "root", "123456");
    }

    public function all(){
        // câu sql
        $query = "select * from " . $this->table;
        // thực thi câu lệnh sql
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        // lấy toàn bộ dữ liệu trả về từ câu lệnh
        return $stmt->fetchAll();
    }
}



?>