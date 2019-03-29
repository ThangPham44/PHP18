<?php 
	session_start();
	$products=$_SESSION['cart'];

	

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
		

		<table class="table">
			<thead>
				<tr>
					<th scope="col">STT</th>
					<th scope="col"> Mã sản phẩm</th>
					<th scope="col">tên sản phẩm </th>
					<th scope="col">đơn giá</th>
				

					<th scope="col">số lượng</th>
					
						
					<th scope="col">thành tiền </th>

				

				</tr>
			</thead>
			<tbody>

				<?php 
					$i=0;
					$tong_tien=0;
					foreach ($products as $key => $product) {
						$i++;
						$tong_tien+=$product['DonGia']*$product['SoLuong'];
					
				 ?>
				<tr>

					<td><?= $i ?></td>
					<td><?= $key ?></td>
					<td><?= $product['TenSP'] ?></td>
					<td><?= $product['DonGia'] ?></td>
					<td><a href="add2cart.php?MaSP=<?= $key ?>" class="btn btn-success">+</a></td>
					
					<td><?= $product['SoLuong'] ?></td>
					<td><a href="delete.php?MaSP=<?= $key ?>" class="btn btn-success">-</a></td>

					<td><?= number_format($product['DonGia']*$product['SoLuong']) ?></td>

					

				</tr>
				
				<?php } ?>
				<tr>
				
				</tr>


			</tbody>
		</table>
				<a href="form_khach_hang.php">Thanh toán</a>
	</div>
</body>
</html>