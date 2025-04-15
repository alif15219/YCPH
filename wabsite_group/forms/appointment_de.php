<?php
// include('config_ic.php');

// // รับค่าจากฟอร์ม
// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $message = $_POST['message'];

// // Insert data into the database
// $sql = "INSERT INTO appointment (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

// if ($conn->query($sql) === TRUE) {
//     // Line Notify Token
//     $lineToken = "q3BqAbFyKkw8vnXjAwlZIpQWVgP5sRNQ8PpLBu3rxOK"; // แทนที่ด้วย Line Notify Token ของคุณ

//     // ข้อความที่จะแจ้งเตือน
//     $lineMessage = "มีคำแนะนำใหม่จากผู้ใช้:\n";
//     $lineMessage .= "ชื่อ: $name\n";
//     $lineMessage .= "อีเมล: $email\n";
//     $lineMessage .= "โทรศัพท์: $phone\n";
//     $lineMessage .= "ข้อความ: $message";

//     // ส่งการแจ้งเตือนไปยัง Line Notify
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, "message=" . urlencode($lineMessage));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//         "Authorization: Bearer " . $lineToken,
//         "Content-Type: application/x-www-form-urlencoded"
//     ));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     $response = curl_exec($ch);
//     curl_close($ch);

//     // Redirect or show success message
//     echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว'); window.location.href='index.html';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>
