    

<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        <form action="post.php" method="POST" role="form">
            <legend>Form đăng nhập </legend>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Họ và tên" name="user">
            </div>
            
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Mã sinh viên" name="msv">
            </div>  
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="số diện thoại" name="sđt">
            </div>  
            <div class="form-group">
                <label for="">email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập email" name="email">
            </div>  
            <div class="form-group">
                <label for="">Giới tính</label>
                <input type="radio"  id=""  name="nam" value="Nam">Nam
                <input type="radio"  id=""  name="nu" value="Nữ">Nữ
            </div>  
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="địa chỉ " name="dc">
            </div>  
            
            <button type="submit" class="btn btn-primary" name="submit">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>