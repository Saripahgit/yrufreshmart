<?php 
    include "../connect_db.php";
    $get_update_id=$_REQUEST['update_id'];
 
    try{
        $sql_select= $conn->prepare("SELECT * FROM member_tb where member_id='$get_update_id' ");//การเขียนคำสั่ง SQL
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
        <title>เเบบฟอร์มบันทึกข้อมูลสมาชิก</title>
    </head>
    <body>
        <center>
        <form action="member_update.php?update_id=<?php echo $get_update_id; ?>" method="post">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสมาชิก</h1></td>
                </tr>
                <tr>
                    <td>ชื่อ สกุล</td>
                    <td><input type="text" name="fname" size="50" value="<?php echo $row_select['member_name']; ?>"></td>
                </tr>
                <tr>
                    <td>เพศ</td>
                    <td>
                    <?php 
                        if($row_select['member_gender']==0){
                            $female="checked";
                            $male="";
                        }else{
                            $female="";
                            $male="checked";
                        }
                    ?>
                            <input type="radio" name="fgender" value="0" <?php echo $female ;?>>หญิง                    
                            <input type="radio" name="fgender" value="1" <?php echo $male ;?>>ชาย
                    
                        
                    </td>
                </tr>
                <tr>
                    <td>ที่อยู่</td>
                    <td><textarea name="faddress" rows="5" cols="50"><?php echo $row_select['member_address'];?></textarea></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสมาชิก"></td>
                </tr>
            </table>
        </form>
    </center>
    </body> 
</html>
