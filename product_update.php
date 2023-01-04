<?php
include "connect_db.php";  //เชื่อมต่อ database
$get_update_id=$_REQUEST['update_id'];
$get_name=$_REQUEST['fname'];
$get_type=$_REQUEST['ftype'];
$get_dealer=$_REQUEST['fdealer'];
$get_price=$_REQUEST['fprice'];
 
 
 
try{
      
    $sql_update = "UPDATE product_tb 
            SET product_name='$get_name',
                product_type='$get_type',
                product_dealer='$get_dealer',
                product_price='$get_price'
            WHERE product_id='$get_update_id' ";
  
    $stmt = $conn->prepare($sql_update);
    $stmt->execute();
  
    echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";      
    echo "<script>window.location.href='product_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
