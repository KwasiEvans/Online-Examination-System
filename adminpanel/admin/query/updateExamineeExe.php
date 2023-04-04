<?php
 include("../../../conn.php");
 extract($_POST);


$updCourse = $conn->query("UPDATE examinee_tbl SET exmne_fullname='$exFullname', exmne_course='$exCourse', exmne_gender='$exGender', exmne_birthdate='$exBdate', exmne_year_level='$exYrlvl', exmne_email='$exEmail', exmne_password='$exPass' WHERE exmne_id='$exmne_id' ");
if($updCourse)
{
	   $res = array("res" => "success", "exFullname" => $exFullname);
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>