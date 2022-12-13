<?php include "../connect_db.php";  //เชื่อมต่อ database  ?>
<html>
    <head>
        <title>เเบบฟอร์มบันทึกข้อมูลสมาชิก</title>
    </head>
    <body>
        <center>
        <form action="member_insert.php" method="post">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสมาชิก</h1></td>
                </tr>
                <tr>
                    <td>ชื่อ สกุล</td>
                    <td><input type="text" name="fname" size="50"></td>
                </tr>
                <tr>
                    <td>เพศ</td>
                    <td>
                        <input type="radio" name="fgender" value="0">หญิง
                        <input type="radio" name="fgender" value="1">ชาย
                    </td>
                </tr>
                <tr>
                    <td>ที่อยู่</td>
                    <td><textarea name="faddress" rows="5" cols="50"></textarea></td>
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
