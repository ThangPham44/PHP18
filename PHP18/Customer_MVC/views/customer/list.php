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
        <h2 align="center">DANH SÁCH KHÁCH HÀNG </h2>
        <a href="?mod=customer&act=add" class="btn btn-primary">Thêm mới</a>
          <p><?php echo( isset($_COOKIE['msg'])?$_COOKIE['msg']:'')?></p>
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
         

            <th>
                  <a href="?mod=customer&act=edit&code=<?=$row['code']?>" class="btn btn-primary">Sửa</a>
                  <a href="?mod=customer&act=delete&code=<?=$row['code']?>"class="btn btn-primary">Xóa</a>
                  <a href="?mod=customer&act=detail&code=<?=$row['code']?>" class="btn btn-default btn-show" >show</a>
              </th>



         </tr>
     <?php } ?>
 </tbody>
</table>
</div>
</body>
</html>