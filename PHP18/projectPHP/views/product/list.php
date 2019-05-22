<?php 
    include_once('views/Layout/header.php');
 ?>
    <div class="container">

        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <a href="?mod=product&act=add" class="btn btn-primary">Thêm mới</a>
        <p><?php echo( isset($_COOKIE['msg'])?$_COOKIE['msg']:'')?></p>
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
                    <th>giá bán </th>
                    <th>ảnh </th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) {
                    ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['quantity'] ?></td>
                        <td><?= $row['category']['category_name'] ?></td>
                        <td><?= $row['gia_ban'] ?></td>
                         <td><img src="<?=$row['picture'] ?>" style="width: 200px; height:200px"></td >


                        <td>
                           
                            <a href="?mod=product&act=edit&code=<?=$row['id']?>" class="btn btn-warning">Update</a>
                            <a href="?mod=product&act=delete&code=<?=$row['id']?>" class="btn btn-danger">Delete</a>
                            <a href="?mod=product&act=detail&code=<?=$row['id']?>" class="btn btn-default btn-show" >show</a>

                        </td>
                    </tr>
                    <?php

                }
                ?>
            </tbody>
        </table>
    </div>


<?php 
   include_once('views/Layout/footer.php');  
 ?>