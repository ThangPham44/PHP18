<?php 
    include_once('views/Layout/header.php');
 ?>

    <div class="container">
        <h2 align="center">CATEGORY</h2>
        <a href="?mod=category&act=add" class="btn btn-primary">Thêm mới</a>
          <p><?php echo( isset($_COOKIE['msg'])?$_COOKIE['msg']:'')?></p>
        <table class="table">
            <thead>
              <tr>
                <th>Code</th>
                <th>Name</th> 
                
             
               

          </tr>
      </thead>
      <tbody>
       <?php   	
       foreach ($data as $row ) {
          ?>
          <tr>
             <td><?=$row['category_code'] ?></td>
             <td><?=$row['category_name'] ?></td>
             <

            <th>
                  <a href="?mod=category&act=edit&code=<?=$row['category_code']?>" class="btn btn-primary">Sửa</a>
                  <a href="?mod=category&act=delete&code=<?=$row['category_code']?>"class="btn btn-primary">Xóa</a>
                  <a href="?mod=category&act=detail&code=<?=$row['category_code']?>" class="btn btn-primary" >show</a>
              </th>



         </tr>
     <?php } ?>
 </tbody>
</table>
</div>

<?php 
   include_once('views/Layout/footer.php');  
 ?>