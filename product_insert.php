<?php
include "connect_db.php";  //เชื่อมต่อ database
$get_name=$_REQUEST['fname'];
$get_type=$_REQUEST['ftype'];
$get_dealer=$_REQUEST['fdealer'];
$get_price=$_REQUEST['fprice'];
 
/* ทดสอบการส่งข้อมูลจากไฟล์ที่ชื่อ product_form_insert.php
echo $get_name;
echo $get_type;
echo $get_dealer;
*/
 
try{
$sql_insert = "insert into product_tb (product_id,product_name,product_type,product_dealer,product_price) 
values ('','$get_name','$get_type','$get_dealer','$get_price')";
 
    $conn->exec($sql_insert);
    echo "บันทึกข้อมูลเรียบร้อยเเล้ว";
echo "<script>window.location.href='product_select.php';</script>";
 
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
