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
    <h3 align="center">CẬP NHẬT </h3>
    <hr>
        <form action="?mod=customer&act=update&code=<?=$row['code']?>" method="POST" role="form" enctype="multipart/form">
            <div class="form-group">
                <label for="">STT</label>
                <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="code" value="<?=$row['code']?>" readonly >
            </div>
            <div class="form-group">
                <label for="">Tên </label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="name" value="<?=$row['name']?>">
            </div>  
            <div class="form-group">
                <label for="">email</label>
                <input type="" class="form-control" id="" placeholder="Nhập vào số lượng" name="email"  value="<?=$row['email']?>">
            </div>
            <div class="form-group">
                <label for="">mobile</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá nhập hàng" name="mobile"  value="<?=$row['mobile']?>">
            </div>
            <div class="form-group">
                <label for="">địa chỉ</label>
                <input type="" class="form-control" id="" placeholder="Nhập vào" name="address"  value="<?=$row['address']?>">
            </div>
             <!--div class="form-group">
                <label for="">Ảnh Sản phẩm</label>
                <input type="file" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ANH_SP">
            </div-->
            
            
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</body>
</html>