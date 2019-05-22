<?php 
   include_once('views/Layout/header.php');
 ?>

 
<body>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">THÊM MỚI NHÂN VIÊN</h3>
    <hr>
        <form action="?mod=employee&act=process" method="POST" role="form"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Số thứ tự</label>
                <input type="text" class="form-control" id="" placeholder="Nhập số thứ tự" name="code" >
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên" name="employee_name">
            </div>  
              <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="employee_address">
            </div>
             <div class="form-group">
                <label for="">BirthDay</label>
                <input type="date" class="form-control" id="" placeholder="Nhập ngày sinh" name="employee_birthday">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập email" name="employee_email">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="number" class="form-control" id="" placeholder="Nhập mobile" name="employee_mobile">
            </div>
             <div class="form-group">
                <label for="">Password</label>
                <input type="Password" class="form-control" id="" placeholder="Nhập Password" name="employee_pass">
            </div>
           <div class="form-group">
                <label for="">Avatar</label>
                <input id="file-1" type="file" name="file"  class="file" >
               
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