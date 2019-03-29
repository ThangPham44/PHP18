<?php 

	class DongVat  // Lớp Động vật
{
    // Thuộc Tính
    var $mat = '';
    var $mui = '';
    var $mieng = '';
    var $chan = '';
    var $gioitinh = '';
  
    // Hàm, phương thức
    function an(){
        echo "ăn";
    }
  
    function ngu(){
       echo "^^";
    }
  
    function chay(){
      echo "chạy chậm";
    }
  
    function lahet(){
        // lệnh
    }
}
class conTrau extends DongVat
{
	 function an(){
        echo "Biết ăn cỏ";
    }
}
$contrau = new conTrau();
echo $contrau->an() . '<br>';

echo $contrau->chay();

 ?>
