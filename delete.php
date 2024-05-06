<?php
$conn = mysqli_connect("localhost","root" , "");
mysqli_select_db($conn, "dbpoetry");

$id =$_POST['id'];


$qry = "DELETE FROM dbtable WHERE id='$id' ";

$res = mysqli_query($conn ,$qry);
if($res==true)
$response = array("status"=>"1", "message"=>"Poetry Deleted succsesfully");
else
$response = array("status"=>"0", "message"=>"Poetry not deleted succesfully");
echo json_encode($response);

?>