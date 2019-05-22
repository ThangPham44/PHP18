<?php 
   include_once('views/Layout/header.php');
 ?>

 
<body>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">THÊM MỚI CATEGORY</h3>
    <hr>
        <form action="?mod=category&act=process" method="POST" role="form"  enctype="multipart/form-data">
           
            <div class="form-group">
                <label for="">Code</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên" name="category_code" >
            </div>  
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="category_name" >
            </div>
            
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>

<?php 
   include_once('views/Layout/footer.php');  
 ?>