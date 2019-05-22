<?php 
    include_once('views/Layout/header.php');
 ?>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">CẬP NHẬT </h3>
    <hr>
        <form action="?mod=customer&act=update&code=<?=$row['customer_code']?>" method="POST" role="form" enctype="multipart/form">
            <div class="form-group">
                <label for="">STT</label>
                <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="code" value="<?=$row['customer_code']?>" readonly >
            </div>
            <div class="form-group">
                <label for="">Tên </label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="name" value="<?=$row['customer_name']?>">
            </div>  
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="" class="form-control" id="" placeholder="Nhập vào số lượng" name="address"  value="<?=$row['customer_address']?>">
            </div>
            <div class="form-group">
                <label for="">Ngày sinh</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào ngày sinh" name="birthday"  value="<?=$row['customer_birthday']?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="" class="form-control" id="" placeholder="Nhập vào email" name="email"  value="<?=$row['customer_email']?>">
            </div>
             <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="mobile"  value="<?=$row['customer_mobile']?>">
            </div>
             <!--div class="form-group">
                <label for="">Ảnh Sản phẩm</label>
                <input type="file" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ANH_SP">
            </div-->
            
            
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
<?php 
   include_once('views/Layout/footer.php');  
 ?>