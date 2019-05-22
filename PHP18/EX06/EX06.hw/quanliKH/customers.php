<?php 
include_once('connection.php');

	// Cau lenh truy van co so du lieu
$query = "SELECT * FROM customers";

	// Thuc thi cau lenh truy van co so du lieu
$result = $conn->query($query);
$data=array();
while($row = $result->fetch_assoc()) {
  $data[]=$row;
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
    <h2 align="center">DANH SÁCH KHÁCH HÀNG</h2>
    <a href="customer_add.php" class="btn btn-primary">Thêm mới</a>
    <table class="table">
      <thead>
        <tr>
          <th>code</th>
          <th>name</th>
          <th>email</th>
          <th>mobile</th>
          <th>address</th>

        </tr>
      </thead>
      <tbody>
       <?php 
       foreach ($data as $row ) {
								# code...

        ?>
        <tr>
         <td><?=$row['code'] ?></td>
         <td><?=$row['name'] ?></td>
         <td><?=$row['email'] ?></td>
         <td><?=$row['mobile'] ?></td>
         <td><?=$row['address'] ?></td>           
        <td>
          <a href="customers_edit.php?code=<?=$row['code']?>" class="btn btn-primary">Sửa</a>
          <a href="customers_delete.php?code=<?=$row['code']?>"class="btn btn-primary">Xóa</a>
            <a href="javascript:;" data-id="<?=$row['code']?>" class="btn btn-default btn-show" >show</a>
        </td>
        </tr>


    <?php }?>
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
            <p>Mã sản phẩm :<span id="code_detail_customers"></span></p>
            <p>Tên sản phẩm :<span id="name_detail_customers"></span></p>
            <p>email :<span id="email_detail_customers"></span></p>
            <p>Số điện thoại :<span id="mobile_detail_customers"></span></p>

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
            url:'customers_detail.php?code=' +id,
            success:function(reponse){

                $('#code_detail_customers').html(reponse.code);
                $('#name_detail_customers').html(reponse.name);
                $('#email_detail_customers').html(reponse.email);        
                $('#mobile_detail_customers').html(reponse.mobile);

            }
          })
    });
  });

  
</script>