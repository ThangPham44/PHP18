<?php 
    include_once('views/Layout/header.php');
 ?>

    <div class="container">
        <h2 align="center">Chi Tiết Sản Phẩm </h2>
      <!--   <a href="#" class="btn btn-primary">Thêm mới</a> -->
          <p><?php echo( isset($_COOKIE['msg'])?$_COOKIE['msg']:'')?></p>
        <table class="table">
            <thead>
              <tr>
                <th>Code</th>
                <th>STT Khách Hàng</th> 
                <th>Tổng Tiền</th>
                <th>Thời Gian Mua</th>
                <th>Nhân Viên Bán</th>
               
             
               

          </tr>
      </thead>
      <tbody>
       <?php   	
       foreach ($data as $row ) {
          ?>
          <tr>
             <td><?=$row['bill_code'] ?></td>
             <td><?=$row['customer_code'] ?></td>
             <td><?=$row['total_money'] ?></td>
             <td><?=$row['time_bill'] ?></td>
             <td><?=$row['employee_code'] ?></td>
           
         

            <th>
                  <a href="?mod=employee&act=edit&code=<?=$row['employee_code']?>" class="btn btn-primary">Sửa</a>
                  <a href="?mod=bill&act=delete&code=<?=$row['bill_code']?>"class="btn btn-primary">Xóa</a>
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