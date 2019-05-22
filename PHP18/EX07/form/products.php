<?php
require_once('connection.php');

$query= "SELECT * FROM form";
$result = $conn->query($query);
$data = array();
while($row = $result->fetch_assoc()) { 
    $data[] = $row;
}

?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
</head>

<body>
    <div class="container">

        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <a href="product_add.php" class="btn btn-primary">Thêm mới</a>
        <?php 
        foreach ($data as $row) { 

        } 
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Loại sản phẩm</th>
                    <th>giá nhập</th>
                    <th>giá bán </th>
                    <th>ảnh </th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) {
                    ?>
                    <tr>
                        <td><?= $row['code'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td><?= $row['quantity'] ?></td>
                        <td><?= $row['gia_nhap'] ?></td>
                        <td><?= $row['gia_ban'] ?></td>
                        <td><?= $row['anh'] ?></td>


                        <td>
                           
                            <a href="product_add_update.php?code=<?=$row['code']?>" class="btn btn-warning">Update</a>
                            <a href="delete.php?code=<?=$row['code']?>" class="btn btn-danger">Delete</a>
                            <a href="javascript:;" data-id="<?=$row['code']?>" class="btn btn-default btn-show" >show</a>

                        </td>
                    </tr>
                    <?php

                }
                ?>
            </tbody>
        </table>
    </div>


  

  <!-- Modal -->
  <div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> Chi tiết sản phẩm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
            <p>Mã sản phẩm :<span id="code_detail_product"></span></p>
            <p>Tên sản phẩm :<span id="name_detail_product"></span></p>
            <p>Số lượng sản phẩm :<span id="quantity_detail_product"></span></p>
            <p>giá sản phẩm :<span id="price_detail_product"></span></p>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
</div>
</div>
</div>
</body>



</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('.btn-show').on('click',function(){
        $('#modal-show').modal('show');
        var id = $(this).data('id');

        $.ajax({
            type:'get',
            dataType:"json",
            url:'product_detail.php?code=' +id,
            success:function(reponse){

                $('#code_detail_product').html(reponse.code);
                $('#name_detail_product').html(reponse.name);
                $('#quantity_detail_product').html(reponse.quantity);        
                $('#price_detail_product').html(reponse.price);

            }
          })
    });
  });

  
</script>