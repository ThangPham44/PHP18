<?php
require_once('connection.php');

$query_pt = "SELECT * FROM form";
$result = $conn->query($query);
$result_pt = $conn->query($query_pt);
$data = array();
while($row = $result->fetch_assoc()) { 
    $data[] = $row;
}
$data_pt = array();
    while($row_pt = $result_pt->fetch_assoc()) { 
        $data_pt[] = $row_pt;
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <?php 
            foreach ($data_pt as $row_pt) { 
        ?>
            <a href="product.php?TYPE_CODE=<?= $row_pt['TYPE_CODE'] ?>"> <?= $row_pt['TYPE_NAME'] ?> </a>
        <?php 
            } 
        ?>
            
        <table class="table">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($data as $row) {
                ?>
                <tr>
                    <td><?= $row['code'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['type_name'] ?></td>
                    <td><?= $row['quantily'] ?></td>
                    <td>
                        <a href="product_detail.php" class="btn btn-success">Detail</a>
                        <a href="update.php" class="btn btn-warning">Update</a>
                        <a href="delete.php" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>