<?php 
require_once('connection.php');
$code=$_GET['code'];
$query = "SELECT * FROM customers WHERE code='".$code."'";

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
        <h3 align="center">UPDATE KHÁCH HÀNG</h3>
        <hr>
        <form action="customer_edit_process.php" method="POST" role="form" enctype="multipart/form">
            <div class="form-group">
                <label for="">Số thứ tự</label>
                <input type="text" class="form-control" id="" placeholder="Nhập số thứ tự" name="code" value="<?=$row['code']?>" readonly >
            </div>
            <div class="form-group">
                <label for="">name</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên" name="name" value="<?=$row['name']?>">
            </div>  
            <div class="form-group">
                <label for="">email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập email" name="email" value="<?=$row['email']?>">
            </div>
            <div class="form-group">
                <label for="">mobile</label>
                <input type="number" class="form-control" id="" placeholder="Nhập mobile" name="mobile" value="<?=$row['mobile']?>">
            </div>
            <div class="form-group">
                <label for="">address</label>
                <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="address" value="<?=$row['address']?>">
            </div>
             <!--div class="form-group">
                <label for="">Ảnh Sản phẩm</label>
                <input type="file" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ANH_SP">
            </div-->

            
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>