<?php 
    include_once('views/Layout/header.php');
 ?>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">CẬP NHẬT </h3>
    <hr>
        <form action="?mod=category&act=update&code=<?=$row['customer_code']?>" method="POST" role="form" enctype="multipart/form">
           
            <div class="form-group">
                <label for="">Code </label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="name" value="<?=$row['category_code']?>">
            </div>  
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số lượng" name="address"  value="<?=$row['category_name']?>">
            </div>
           
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
<?php 
   include_once('views/Layout/footer.php');  
 ?>