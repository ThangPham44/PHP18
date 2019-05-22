<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
        <a href="?mod=product&act=add" class="btn btn-primary">Thêm mới</a>
        <p><?php echo( isset($_COOKIE['msg'])?$_COOKIE['msg']:'')?></p>
        <?php 
        foreach ($data as $row) { 

        } 
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Loại sản phẩm</th>
                    <th>giá nhập</th>
                    <th>giá bán </th>
                    <th>ảnh </th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) {
                    ?>
                    <tr>
                        <td><?= $row['code'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td><?= $row['quantity'] ?></td>
                        <td><?= $row['gia_nhap'] ?></td>
                        <td><?= $row['gia_ban'] ?></td>
                        <td><?= $row['anh'] ?></td>


                        <td>
                           
                            <a href="?mod=product&act=edit&code=<?=$row['code']?>" class="btn btn-warning">Update</a>
                            <a href="?mod=product&act=delete&code=<?=$row['code']?>" class="btn btn-danger">Delete</a>
                            <a href="?mod=product&act=detail&code=<?=$row['code']?>" class="btn btn-default btn-show" >show</a>

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