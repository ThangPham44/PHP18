<?php 
    include_once('views/Layout/header.php');
 ?>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">CẬP NHẬT SẢN PHẨM</h3>
    <hr>
        <form action="?mod=product&act=update&code=<?=$row['id']?>" method="POST" role="form" enctype="multipart/form">
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="code" value="<?=$row['id']?>" readonly >
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="name" value="<?=$row['name']?>">
            </div>  
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số lượng" name="quantity"  value="<?=$row['quantity']?>">
            </div>
            
            <div class="form-group">
                <label for="">Giá bán</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá bán" name="gia_ban"  value="<?=$row['gia_ban']?>">
            </div>
    
            <div class="form-group">
                <label for="">Loại Sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mã loại SP" name="category_id"  value="<?=$row['category_id']?>">
            </div>
            
            
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>

<?php 
   include_once('views/Layout/footer.php');  
 ?>