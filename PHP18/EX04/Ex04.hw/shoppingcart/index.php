<?php 
	session_start();
	include_once('data.php')
	

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
		<a href="cart.php">Xem giỏ hàng</a>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">STT</th>
					<th scope="col"> MÃ sản phẩm</th>
					<th scope="col"> tên sản phẩm </th>
					

					<th scope="col">Đơn giá</th>
					<th scope="col">Số lương</th>
					<th scope="col">#</th>

				</tr>
			</thead>
			<tbody>
				<?php 
					$i=0;
					foreach ($products as $key => $product) {
						$i++;
					
				 ?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $key ?></td>
					<td><?= $product['TenSP'] ?></td>
					<td>
						
					</td>
					<td><?= number_format($product['DonGia']) ?></td>
					<td><?= $product['SoLuong'] ?></td>
					<td><a href="add2cart.php?MaSP=<?= $key ?>" class="btn btn-success"> Thêm vào giỏ hàng</a></td>
					

				</tr>
				
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>