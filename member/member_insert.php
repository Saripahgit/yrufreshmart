<?php
include "../connect_db.php";  //เชื่อมต่อ database
$get_name=$_REQUEST['fname'];
$get_gender=$_REQUEST['fgender'];
$get_address=$_REQUEST['faddress'];
 
try{
$sql_insert = "insert into member_tb (member_id,member_name,member_gender,member_address) 
values ('','$get_name','$get_gender','$get_address')";
 
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
    echo "<script>window.location.href='member_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
