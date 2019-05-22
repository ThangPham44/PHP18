<?php 
   include_once('views/Layout/header.php');
 ?>

 
    <div class="container">
        <h3 class="text-center">THÔNG TIN </h3>
        <ul>
            
            <li>Tên: <?= $category['category_code'] ?></li>
            <li>Địa chỉ: <?= $category['category_name'] ?> </li>
            
        </ul>
    </div>
<?php 
   include_once('views/Layout/footer.php');  
 ?>