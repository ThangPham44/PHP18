<?php 
include_once('Connection.php');
class Model{
		var $conn;
		var $table='';
		var $primary_key='id';
		function __construct(){
			$connection_object = new Connection();
			$this->conn=$connection_object->conn;
		}
	public function getAll(){
	
	$query= "SELECT * FROM ".$this->table;
	$result = $this->conn->query($query);
	$data = array();
	while($row = $result->fetch_assoc()) { 
		$data[] = $row;
	}
	return $data;
}
public function find($code){

	$query= "SELECT * FROM ".$this->table."  WHERE ".$this->primary_key."='".$code."'";
	$result =$this->conn->query($query);
	$data = array();
	$product  = $result->fetch_assoc(); 
	
	return $product;
}
public function insert($data){
	unset($data['submit']);
	unset($data['ANH_SP']);
	$fields='';
	$values='';
	foreach ($data as $key => $value) {
		$fields.=$key . ',';
		$values.="'".$value."',";
		
	}
	$fields = trim($fields,',');
	$values = trim($values,',');
	echo "<br> $fields";
	echo "<br> $values";

	
	

	$query=  "INSERT INTO ".$this->table."(".$fields.") values(".$values.")";
	echo "<br> $query";
	$result =$this->conn->query($query);
		return $result;
}
public function update($data){

	

	$query= "UPDATE form SET code='".$data['code']."',name='".$data['name']."',quantity='".$data['quantity']."',gia_ban='".$data['gia_ban']."',gia_nhap='".$data['gia_nhap']."' WHERE code='".$data['code']."'";
	$result = $this->conn->query($query);

	
	return $result;
}

public function delete($code){

	$query="DELETE FROM  ".$this->table." WHERE ".$this->primary_key."='".$code."'";
	$result =$this->conn->query($query);

	
	return $result;
}

}
?>