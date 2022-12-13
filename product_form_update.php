<?php include "connect_db.php"; 
$get_update_id=$_REQUEST['update_id'];
 
 try{
    $sql_select= $conn->prepare("SELECT * FROM product_tb where product_id='$get_update_id'");//การเขียนคำสั่ง SQL
    $sql_select->execute();//สั่งให้ sql_select ทำงาน
    $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);      
 
 
    }
    catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
//$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
?>
 
 
<html>
    <head>
        <title>เเบบฟอร์มเเก้ไขข้อมูลสินค้า</title>
    </head>
    <body>
        <center>
        <form action="product_update.php?update_id=<?php echo $get_update_id; ?> " method="post">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสินค้า</h1></td>
                </tr>
                <tr>
                    <td>ชื่อสินค้า</td>
                    <td><input type="text" name="fname" value="<?php echo $row_select['product_name'];?>"></td>
                </tr>
                <tr>
                    <td>ประเภทสินค้า</td>
                    <td><input type="text" name="ftype" value="<?php echo $row_select['product_type'];?>"></td>
                </tr>
                <tr>
                    <td>ผู้ผลิต</td>
                    <td><input type="text" name="fdealer" value="<?php echo $row_select['product_dealer'];?>"></td>
                </tr>
                <tr>
                    <td>ราคา</td>
                    <td><input type="text" name="fprice" value="<?php echo $row_select['product_price'];?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสินค้า"></td>
                </tr>
            </table>
        </form>
    </center>
    </body> 
</html>
