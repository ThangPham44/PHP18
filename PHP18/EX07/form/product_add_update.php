<?php 
    require_once('connection.php');
$code=$_GET['code'];
$query = "SELECT * FROM form WHERE code='".$code."'";

$result = $conn->query($query);
$row = $result->fetch_assoc();

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
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">CẬP NHẬT SẢN PHẨM</h3>
    <hr>
        <form action="product_add_update_process.php" method="POST" role="form" enctype="multipart/form">
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="code" value="<?=$row['code']?>">
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="name" value="<?=$row['name']?>">
            </div>  
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số lượng" name="price"  value="<?=$row['price']?>">
            </div>
            <div class="form-group">
                <label for="">Giá nhập</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá nhập hàng" name="quantity"  value="<?=$row['quantity']?>">
            </div>
            <div class="form-group">
                <label for="">Giá bán</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá bán" name="gia_nhap"  value="<?=$row['gia_nhap']?>">
            </div>
             <!--div class="form-group">
                <label for="">Ảnh Sản phẩm</label>
                <input type="file" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ANH_SP">
            </div-->
            <div class="form-group">
                <label for="">Loại Sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mã loại SP" name="gia_ban"  value="<?=$row['gia_ban']?>">
            </div>
            <div class="form-group">
                <label for="">Loại Sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mã loại SP" name="loai_san_pham"  value="<?=$row['loai_san_pham']?>">
            </div>
            
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</body>
</html>