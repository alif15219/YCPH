<?php
// การเชื่อมต่อฐานข้อมูล
include('config_ic.php');

// อ่านจำนวนการเข้าชมจากฐานข้อมูล
$sql = "SELECT count FROM visits WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // อัปเดตจำนวนการเข้าชม
    $row = $result->fetch_assoc();
    $count = $row['count'] + 1;

    $update_sql = "UPDATE visits SET count = $count WHERE id = 1";
    $conn->query($update_sql);
} else {
    // เพิ่มบันทึกใหม่ถ้ายังไม่มี
    $count = 1;
    $insert_sql = "INSERT INTO visits (id, count) VALUES (1, $count)";
    $conn->query($insert_sql);
}

$conn->close();

// ส่งค่ากลับไปที่ JavaScript
echo $count;
?>