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
        <h2 align="center">DANH SÁCH NHÂN VIÊN</h2>
        <a href="employee_add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table">
            <thead>
              <tr>
                <th>code</th>
                <th>name</th>
                <th>email</th>
                <th>mobile</th>
                <th>address</th>
                <th>password</th>


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
             <td><?=sha1($row['password']) ?></td>

            <th>
                  <a href="employee_edit.php?code=<?=$row['code']?>" class="btn btn-primary">Sửa</a>
                  <a href="employee_delete.php?code=<?=$row['code']?>"class="btn btn-primary">Xóa</a>
                  <a href="?mod=employee&act=detail&code=<?=$row['code']?>" class="btn btn-default btn-show" >show</a>
              </th>



         </tr>
     <?php } ?>
 </tbody>
</table>
</div>
</body>
</html>