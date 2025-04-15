<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>อัตราส่วนพยาบาลต่อผู้ป่วย</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap');
        
        body {
            font-family: 'Prompt', sans-serif;
            background: url('https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
        }
        h2 {
            color: #fff;
        }
        form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: center;
        }
        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-size: 1.2em;
        }
        select, input, button {
            margin: 10px 0;
            width: 100%;
            font-size: 1.2em;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: center;
        }
        img {
            width: 100px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>คำนวณอัตราส่วนพยาบาลต่อผู้ป่วยในแต่ละเวร</h2>
    <!-- <img src="https://www.nursechoice.com/uploadedImages/AMN/Content/NurseChoice/Home/Images/telehealth-nurse-choice.png" alt="Nurse Image"> -->
    <form method="post" action="">
        <label for="shift">เลือกเวร:</label>
        <select id="shift" name="shift" required>
            <option value="morning">เวรเช้า</option>
            <option value="afternoon">เวรบ่าย</option>
            <option value="night">เวรดึก</option>
        </select><br><br>
        
        <label for="nurses">จำนวนพยาบาล:</label>
        <input type="number" id="nurses" name="nurses" required><br><br>
        
        <label for="patients">จำนวนผู้ป่วย:</label>
        <input type="number" id="patients" name="patients" required><br><br>
        
        <button type="submit">คำนวณอัตราส่วน</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $shift = $_POST['shift'];
        $nurses = $_POST['nurses'];
        $patients = $_POST['patients'];
        
        if ($nurses > 0) {
            $ratio = $patients / $nurses;
            echo "<div class='result'>";
            echo "<h3>อัตราส่วนในเวร $shift:</h3>";
            echo "<p>อัตราส่วนพยาบาลต่อผู้ป่วย: 1:$ratio</p>";
            echo "</div>";
        } else {
            echo "<div class='result'>";
            echo "<p>จำนวนพยาบาลต้องมากกว่า 0</p>";
            echo "</div>";
        }
    }
    ?>
</body>
</html>
