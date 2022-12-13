<?php include "../connect_db.php"; ?> 
<html>
    <head>
        <title>เเสดงข้อมูลสินค้าทั้งหมด</title>
    </head>
    <body>
   <center> 
        <a href="member_form_insert.php"> -เพิ่มข้อมูลสินค้า </a>
        <table border = "1px">
            
            <tr>
                <th>รหัสสมาชิก</th>
                <th>ชื่อสมาชิก</th>
                <th>เพศ</th>
                <th>ที่อยู่</th>
                <th>เเก้ไข</th>
                <th>ลบ</th>   
            </tr>
            <?php
                try{
                    $sql_select= $conn->prepare("SELECT * FROM member_tb");//การเขียนคำสั่ง SQL
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>

            <tr>
                <td><?php echo $row_select['member_id'];  ?></td>
                <td><?php echo $row_select['member_name']; ?></td> 
                <td><?php echo $row_select['member_gender']; ?></td> 
                <td><?php echo $row_select['member_address']; ?></td>   
               <td><a href="member_form_update.php?update_id=<?php echo $row_select['member_id'];  ?>"  
               onclick="return confirm('คุณแน่ใจหรือว่าต้องการอัปเดตรายการนี้?');">เเก้ไข</a></td>
                <td><a href="member_delete.php?delete_id=<?php echo $row_select['member_id'];?>" onclick="return confirm('คุณแน่ใจหรือว่าต้องการลบรายการนี้หรือไม่?');">ลบ</a></td>   
            </tr>
                <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
            </tbody>  
        </table>
        </center>
   </div>
    </body>
</html>
