<?php
// Database connection
$conn = new mysqli("118.174.1.166", "sa", "m0801401513", "cronjob_db");

if ($conn->connect_error) {
    file_put_contents('/path/to/error.log', "Connection failed: " . $conn->connect_error . " at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
    die("Connection failed: " . $conn->connect_error);
}

// ดึงงานทั้งหมดที่มีสถานะ active
$sql = "SELECT * FROM cron_jobs WHERE status = 'active'";
$result = $conn->query($sql);

if (!$result) {
    file_put_contents('/path/to/error.log', "Query failed: " . $conn->error . " at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
    $conn->close();
    exit;
}

$current_time = new DateTime();

while ($row = $result->fetch_assoc()) {
    $should_run = false;

    // ตรวจสอบว่าเคยรันในนาทีนี้ไปแล้วหรือไม่
    $last_run = $row['last_run'] ? new DateTime($row['last_run']) : null;
    if ($last_run && $last_run->format('Y-m-d H:i') === $current_time->format('Y-m-d H:i')) {
        continue; // ข้ามถ้ารันไปแล้วในนาทีนี้
    }

    // ตรวจสอบตารางงานตามประเภท
    switch ($row['schedule_type']) {
        case 'minute':
            $minutes = (int)$row['schedule_value']; // เช่น 15 (ทุก 15 นาที)
            $should_run = ($current_time->format('i') % $minutes == 0);
            break;

        case 'daily':
            $scheduled_time = DateTime::createFromFormat('H:i', $row['schedule_value']); // เช่น 0:00
            $should_run = ($current_time->format('H:i') === $scheduled_time->format('H:i'));
            break;

        case 'monthly':
            list($day, $time) = explode(' ', $row['schedule_value']); // เช่น "1 0:00"
            $scheduled_time = DateTime::createFromFormat('H:i', $time);
            $should_run = ($current_time->format('j') == $day && 
                          $current_time->format('H:i') === $scheduled_time->format('H:i'));
            break;

        case 'yearly':
            list($day, $month, $time) = explode(' ', $row['schedule_value']); // เช่น "1 January 0:00"
            $scheduled_time = DateTime::createFromFormat('H:i', $time);
            $should_run = ($current_time->format('j') == $day && 
                          $current_time->format('F') === $month && 
                          $current_time->format('H:i') === $scheduled_time->format('H:i'));
            break;
    }

    // ถ้าถึงเวลาที่กำหนด ให้รันงาน
    if ($should_run) {
        try {
            // เรียก URL
            $response = file_get_contents($row['url']);
            $log_message = "Ran job '{$row['title']}' (ID: {$row['id']}) at " . $current_time->format('Y-m-d H:i:s') . " with response: $response\n";
            
            // อัพเดท last_run ในฐานข้อมูล
            $update_sql = "UPDATE cron_jobs SET last_run = ? WHERE id = ?";
            $stmt = $conn->prepare($update_sql);
            $current_timestamp = $current_time->format('Y-m-d H:i:s');
            $stmt->bind_param("si", $current_timestamp, $row['id']);
            $stmt->execute();
            $stmt->close();
        } catch (Exception $e) {
            $log_message = "Error running job '{$row['title']}' (ID: {$row['id']}) at " . $current_time->format('Y-m-d H:i:s') . ": " . $e->getMessage() . "\n";
        }

        // บันทึก log
        file_put_contents('/path/to/cron.log', $log_message, FILE_APPEND);
    }
}

$conn->close();
?>