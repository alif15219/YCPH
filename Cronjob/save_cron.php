<?php
// Database connection
$conn = new mysqli("118.174.1.166", "sa", "m0801401513", "cronjob_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$url = $_POST['url'];
$schedule_type = $_POST['schedule_type'];
$schedule_value = '';

switch($schedule_type) {
    case 'minute':
        $schedule_value = $_POST['minute_value'];
        break;
    case 'daily':
        $hour = str_pad($_POST['daily_hour'], 2, '0', STR_PAD_LEFT);
        $minute = $_POST['daily_minute'];
        $schedule_value = "$hour:$minute";
        break;
    case 'monthly':
        $day = $_POST['month_day'];
        $hour = str_pad($_POST['month_hour'], 2, '0', STR_PAD_LEFT);
        $minute = $_POST['month_minute'];
        $schedule_value = "$day $hour:$minute";
        break;
    case 'yearly':
        $day = $_POST['year_day'];
        $month = $_POST['year_month'];
        $hour = str_pad($_POST['year_hour'], 2, '0', STR_PAD_LEFT);
        $minute = $_POST['year_minute'];
        $schedule_value = "$day $month $hour:$minute";
        break;
}

$sql = "INSERT INTO cron_jobs (title, url, schedule_type, schedule_value) 
        VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $title, $url, $schedule_type, $schedule_value);

if ($stmt->execute()) {
    echo "Cronjob created successfully!";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>