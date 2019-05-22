<?php 
    include_once('views/Layout/header.php');
 ?>

    <div class="container">
        <h2 align="center">DANH SÁCH KHÁCH HÀNG </h2>
        <a href="?mod=customer&act=add" class="btn btn-primary">Thêm mới</a>
          <p><?php echo( isset($_COOKIE['msg'])?$_COOKIE['msg']:'')?></p>
        <table class="table">
            <thead>
              <tr>
                <th>Code</th>
                <th>Name</th> 
                <th>address</th>
                <th>BirthDay</th>
                <th>Email</th>
                <th>Mobile</th>              
            <!--     <th>Avatar</th>
              -->
               

          </tr>
      </thead>
      <tbody>
       <?php   	
       foreach ($data as $row ) {
          ?>
          <tr>
             <td><?=$row['customer_code'] ?></td>
             <td><?=$row['customer_name'] ?></td>
             <td><?=$row['customer_address'] ?></td>
             <td><?=$row['customer_birthday'] ?></td>
             <td><?=$row['customer_email'] ?></td>
             <td><?=$row['customer_mobile'] ?></td>
          <!--    <td><img src="<?=$row['customer_image'] ?>" style="width: 200px; height:200px"></td > -->
         

            <th>
                  <a href="?mod=customer&act=edit&code=<?=$row['customer_code']?>" class="btn btn-primary">Sửa</a>
                  <a href="?mod=customer&act=delete&code=<?=$row['customer_code']?>"class="btn btn-primary">Xóa</a>
                  <a href="?mod=customer&act=detail&code=<?=$row['customer_code']?>" class="btn btn-primary" >show</a>
              </th>



         </tr>
     <?php } ?>
 </tbody>
</table>
</div>

<?php 
   include_once('views/Layout/footer.php');  
 ?>