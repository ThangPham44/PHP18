<?php 
   include_once('views/Layout/header.php');
 ?>

 
    <div class="container">
        <h3 class="text-center">THÔNG TIN SẢN PHẨM</h3>
        <ul>
            <li>Số thứ tự: <?= $employee['employee_code'] ?></li>
            <li>Tên: <?= $employee['employee_name'] ?></li>
            <li>Địa chỉ: <?= $employee['employee_address'] ?> </li>
            <li>Sinh Nhật: <?= $employee['employee_birthday'] ?></li>
            <li>Email: <?= $employee['employee_email'] ?></li>
             <li>Số điện thoại: <?= $employee['employee_mobile'] ?></li>
              <li>Avatar: <img src="<?=$employee['employee_image'] ?>" style="width: 200px; height:200px"></li>
        </ul>
    </div>
<?php 
   include_once('views/Layout/footer.php');  
 ?>