<?php 
	include_once('models/products/Model.php');
	include_once('models/products/customer.php');
	include_once('models/products/Connection.php');
	class bill extends Model{
		var $table='bills';
		var $primary_key='bill_code';

	}
 ?>