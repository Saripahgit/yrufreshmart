<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = " freshmart_db";
 
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
  //ถ้าเชื่อมต่อสำเร็จ ก็คอมเม้นไว้เลย
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

