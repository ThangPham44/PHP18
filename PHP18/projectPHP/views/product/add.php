<?php 
    include_once('views/Layout/header.php');
 ?>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">THÊM MỚI SẢN PHẨM</h3>
    
    <hr>

        <form action="?mod=product&act=process" method="POST" role="form"   enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="id" >
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="name">
            </div>  
            <div class="form-group">
                <label for="">Giá Nhập</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số lượng" name="gia_nhap">
            </div>
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá nhập hàng" name="quantity">
            </div>
            
             <div class="form-group">
                <label for="">Ảnh Sản phẩm</label>
                 <input id="file-1" type="file" name="file"  class="file"  required>
            </div>
            <div class="form-group">
                <label for="">Giá Bán </label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mã loại SP" name="gia_ban">
            </div>     
            <button type="submit" class="btn btn-primary" name="submit">Lưu thông tin</button>
            
    </div>
<?php 
   include_once('views/Layout/footer.php');  
 ?>