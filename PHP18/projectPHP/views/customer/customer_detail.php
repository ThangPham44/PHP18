<?php 
   include_once('views/Layout/header.php');
 ?>

 
    <div class="container">
        <h3 class="text-center">THÔNG TIN SẢN PHẨM</h3>
        <ul>
            <li>Số thứ tự: <?= $customer['customer_code'] ?></li>
            <li>Tên: <?= $customer['customer_name'] ?></li>
            <li>Địa chỉ: <?= $customer['customer_address'] ?> </li>
            <li>Sinh Nhật: <?= $customer['customer_birthday'] ?></li>
            <li>Email: <?= $customer['customer_email'] ?></li>
             <li>Số điện thoại: <?= $customer['customer_mobile'] ?></li>
              <li>Avatar:  <img src="<?=$customer['customer_image'] ?>" style="width: 200px; height:200px"></li>
        </ul>
    </div>
<?php 
   include_once('views/Layout/footer.php');  
 ?>