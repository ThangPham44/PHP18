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
        <a href="product_add.php" class="btn btn-primary">Thêm mới</a>
      

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
               
                    <tr>
                        <td><?= $product['code'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['quantity'] ?></td>
                        <td><?= $product['gia_nhap'] ?></td>
                        <td><?= $product['gia_ban'] ?></td>
                        <td><?= $product['anh'] ?></td>


                       
                    </tr>
                
            </tbody>
        </table>
    </div>

</body>
</html>