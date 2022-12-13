<?php
include "../connect_db.php";  
$get_update_id=$_REQUEST['update_id'];
$get_name=$_REQUEST['fname'];
$get_gender=$_REQUEST['fgender'];
$get_address=$_REQUEST['faddress'];
 
 
try{
    $sql_update = "UPDATE member_tb 
            SET member_name='$get_name',
                member_gender='$get_gender',
                member_address='$get_address'
            WHERE member_id='$get_update_id' ";
  
    $stmt = $conn->prepare($sql_update);
    $stmt->execute();
 
    echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";    
    echo "<script>window.location.href='member_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
