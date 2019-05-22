<?php 
      function file_upload($target_dir,$input_name,$max_size, $formats_allowed_array){
    $target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $error_arr =array();
    
    // Check if file already exists
    if (file_exists($target_file)) {
        $error_arr[] = "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES[$input_name]["size"] > $max_size) {
        $error_arr[] = "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if(!in_array($imageFileType, $formats_allowed_array)) {
        $error_arr[] = "Sorry, only ".implode(array_values($formats_allowed_array),',')." files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $error_arr[] = "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
            return $_FILES[$input_name]["name"];
        } else {
            $error_arr[] = "Sorry, there was an error uploading your file.";
        }
    }
    return $error_arr;
  }

      if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        $uploads = file_upload("uploads","ANH_SP",500000,array('JPG', 'png','jpg'));
        if(gettype($uploads) == "array"){
            print_r($uploads); // Trả về mảng lỗi nếu ko upload được
        }else{
            echo "File name is: " . $uploads; // Trả về tên file nếu upload thành công
        }
    }
 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">THÊM MỚI SẢN PHẨM</h3>
    <hr>
        <form action="product_add_process.php" method="POST" role="form" enctype="multipart/form">
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="code" >
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="name">
            </div>  
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số lượng" name="price">
            </div>
            <div class="form-group">
                <label for="">Giá nhập</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá nhập hàng" name="quantity">
            </div>
            <div class="form-group">
                <label for="">Giá bán</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá bán" name="gia_nhap">
            </div>
             <!--div class="form-group">
                <label for="">Ảnh Sản phẩm</label>
                <input type="file" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ANH_SP">
            </div-->
            <div class="form-group">
                <label for="">Loại Sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mã loại SP" name="gia_ban">
            </div>
            <div class="form-group">
                <label for="">Loại Sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mã loại SP" name="loai_san_pham">
            </div>

            
            <button type="submit" class="btn btn-primary" name="submit">Lưu thông tin</button>
            <form action="" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="ANH_SP" id="ANH_SP">
           

        </form>
    </div>
</body>
            <script type="text/javascript">
                function readURL(input) {

              if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                  $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
              }
            }

            $("#imgInp").change(function() {
              readURL(this);
            });
            </script>
</html>