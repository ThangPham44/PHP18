<?php
function mb_ucwords($str)
{
return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
}	
$str="PhạM VăN Thắng";
$str = mb_ucwords($str);
$str1=$str.'.';
echo $str1;
?>