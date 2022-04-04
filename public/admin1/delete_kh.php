<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "banthucphamsach";
$index = 1;
$db = new mysqli($host, $username, $password, $database);
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM khach_hang WHERE id ='$id'";
    $db->query($sql);
    echo "<script>alert('Xoa thanh cong!'); window.location.href='http://localhost:8080/admin1/khach_hang.php';</script>";
}
?>
