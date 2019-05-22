<?php 
    include_once('views/Layout/header.php');
 ?>

    <div class="container">
        <h2 align="center">DANH SÁCH NHÂN VIÊN </h2>
        <a href="?mod=employee&act=add" class="btn btn-primary">Thêm mới</a>
          <p><?php echo( isset($_COOKIE['msg'])?$_COOKIE['msg']:'')?></p>
        <table class="table">
            <thead>
              <tr>
                <th>Code</th>
                <th>Name</th> 
                <th>Address</th>
                <th>BirthDay</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Avatar</th>
             
               

          </tr>
      </thead>
      <tbody>
       <?php   	
       foreach ($data as $row ) {
          ?>
          <tr>
             <td><?=$row['employee_code'] ?></td>
             <td><?=$row['employee_name'] ?></td>
             <td><?=$row['employee_address'] ?></td>
             <td><?=$row['employee_birthday'] ?></td>
             <td><?=$row['employee_email'] ?></td>
             <td><?=$row['employee_mobile'] ?></td>
             <td><img src="<?=$row['employee_image'] ?>" style="width: 200px; height:200px"></td >
         

            <th>
                  <a href="?mod=employee&act=edit&code=<?=$row['employee_code']?>" class="btn btn-primary">Sửa</a>
                  <a href="?mod=employee&act=delete&code=<?=$row['employee_code']?>"class="btn btn-primary">Xóa</a>
                  <a href="?mod=employee&act=detail&code=<?=$row['employee_code']?>" class="btn btn-primary" >show</a>
              </th>



         </tr>
     <?php } ?>
 </tbody>
</table>
</div>

<?php 
   include_once('views/Layout/footer.php');  
 ?>