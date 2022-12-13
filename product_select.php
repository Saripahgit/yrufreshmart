<?php include "connect_db.php"; ?> 
<html>
    <head>
        <title>เเสดงข้อมูลสินค้าทั้งหมด</title>
    </head>
    <body>
   
        <center> 
        <a href="product_form_insert.php"> <b>-เพิ่มข้อมูลสินค้า </b> </a>
        <table border="1px">
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>ประเภทสินค้า</th>
                <th>ผู้ผลิต</th>
                <th>ราคา</th>
                <th>เเก้ไข</th>
                <th>ลบ</th>
                
            </tr>
            <?php //จอย
                  try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM product_tb
                    LEFT JOIN product_type_tb
                    ON product_tb.product_type = product_type_tb.product_type_id");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>

        
            <tr>
                <td><?php echo $row_select['product_id'];  ?></td>
                <td><?php echo $row_select['product_name']; ?></td> 
                <td><?php echo $row_select['product_type']; ?></td> 
                <td><?php echo $row_select['product_dealer']; ?></td> 
                <td><?php echo $row_select['product_price']; ?></td>  
                <td><a href="product_form_update.php?update_id=<?php echo $row_select['product_id'];?>" onclick="return confirm('คุณต้องการที่จะอัพเดดหรือไม่');">เเก้ไข</a></td>
                <td><a href="product_delete.php?del_id=<?php echo $row_select['product_id'];?>" onclick="return confirm('แน่ใจไม่ว่าต้องการจะลบ');">ลบ</a></td>             
            </tr>
                <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
            
        </table>
        </center>
    </body>
</html>