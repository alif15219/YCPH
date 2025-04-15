<?php
include('../config_ic.php'); // ตรวจสอบว่าการเชื่อมต่อฐานข้อมูลทำงานได้ปกติ
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
// ตรวจสอบว่ามีการส่งข้อมูลผ่านฟอร์ม
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าจากฟอร์ม พร้อมป้องกัน SQL Injection
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO appointments (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Line Notify Tokens (ใส่ Token ของแต่ละคนใน Array นี้)
        $lineTokens = [
            "QqSrsGtj8Hv9ltQRh0Clo8wM2EN4aNke43LkQ2R5R1j", // Replace with the first user's token
            "q3BqAbFyKkw8vnXjAwlZIpQWVgP5sRNQ8PpLBu3rxOK", // Replace with the second user's token
            "TOKEN_3"  // Add more tokens as needed
        ];

        // ข้อความที่จะแจ้งเตือน
        $lineMessage = "มีคำแนะนำใหม่จากผู้ใช้:\n";
        $lineMessage .= "ชื่อ: $name\n";
        $lineMessage .= "อีเมล: $email\n";
        $lineMessage .= "โทรศัพท์: $phone\n";
        $lineMessage .= "ข้อความ: $message";

        // ส่งข้อความไปยัง Line Notify สำหรับแต่ละ Token
        foreach ($lineTokens as $lineToken) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "message=" . urlencode($lineMessage));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer " . $lineToken,
                "Content-Type: application/x-www-form-urlencoded"
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
        }

        // Redirect or show success message
        echo
        '
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
       
      
            swal({
             title: "Alert!",
             text: "บันทึกข้อมูลสำเร็จ",
             icon: "success",
      
          button : {
            visible: true,
            closeModal: true,
          }
        })
      
        .then(() => {
        window.history.back();
          
        })
      
        });
        </script>
      
        ';
    } else {
        // กรณีเกิดข้อผิดพลาดในการ Insert ข้อมูล
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // กรณีที่ไม่มีการส่งข้อมูลจากฟอร์ม
    echo "Invalid Request";
}

$conn->close();
?>
