<?php 
   include_once('views/Layout/header.php');
 ?>

 
    <div class="container">
        <h3 class="text-center">THÔNG TIN SẢN PHẨM</h3>
        <ul>
            <li>Số thứ tự: <?= $product['id'] ?></li>
            <li>Tên: <?= $product['name'] ?></li>
            <li>Số Lượng: <?= $product['quantity'] ?></li>
            <li>Loại Sản Phẩm: <?= $product['category']['category_name'] ?></li>
            <li>Giá Bán: <?= $product['gia_ban'] ?></li>
             <li>Ảnh: <img src="<?=$product['picture'] ?>" style="width: 200px; height:200px"></li>
              
        </ul>
    </div>
<?php 
   include_once('views/Layout/footer.php');  
 ?>