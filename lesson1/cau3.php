<?php
require_once "./Category.php";

$cates = Category::all();
?>

<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Slug</th>
        <th>
            <a href="">Thêm</a>
        </th>
    </thead>
    <tbody>
    <?php foreach($cates as $cate): ?>
        <tr>
            <td><?= $cate['id'] ?></td>
            <td><?= $cate['cate_name'] ?></td>
            <td><?= $cate['slug'] ?></td>
            <td>
                <a href="remove.php?id=<?= $cate['id']?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach?>
    </tbody>
</table>