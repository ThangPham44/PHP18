<?php 
   include_once('views/Layout/header.php');
 ?>

 
<body>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">THÊM MỚI KHÁCH HÀNG</h3>
    <hr>
        <form action="?mod=customer&act=process" method="POST" role="form"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Số thứ tự</label>
                <input type="text" class="form-control" id="" placeholder="Nhập số thứ tự" name="code" required>
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên" name="customer_name" required>
            </div>  
              <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="customer_address" required>
            </div>
             <div class="form-group">
                <label for="">BirthDay</label>
                <input type="date" class="form-control" id="" placeholder="Nhập ngày sinh" name="customer_birthday" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập email" name="customer_email" required>
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="number" class="form-control" id="" placeholder="Nhập mobile" name="customer_mobile" required>
            </div>
             <div class="form-group">
                <label for="">Password</label>
                <input type="Password" class="form-control" id="" placeholder="Nhập Password" name="customer_pass" required>
            </div>
           <div class="form-group">
                <label for="">Avatar</label>
                <input id="file-1" type="file" name="file"  class="file"  required>
               
            </div>
          
             <!--div class="form-group">
                <label for="">Ảnh Sản phẩm</label>
                <input type="file" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ANH_SP">
            </div-->
          
            
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>

<?php 
   include_once('views/Layout/footer.php');  
 ?>