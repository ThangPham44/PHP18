<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Education</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">THÔNG TIN SẢN PHẨM</h3>
        <ul>
            <li>số thứ tự: <?= $customer['code'] ?></li>
            <li>Tên: <?= $customer['name'] ?></li>
            <li>email: <?= $customer['email'] ?> sản phẩm</li>
            <li>mobile: <?= $customer['mobile'] ?> VND</li>
            <li>địa chỉ: <?= $customer['address'] ?> VND</li>
        </ul>
    </div>
</body>
</html>