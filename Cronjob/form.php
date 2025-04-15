<!DOCTYPE html>
<html>
<head>
    <title>Cronjob Scheduler</title>
    <style>
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        select, input { margin-right: 5px; }
    </style>
</head>
<body>
    <h2>Create Cronjob</h2>
    <form action="save_cron.php" method="POST">
        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" required>
        </div>

        <div class="form-group">
            <label>URL:</label>
            <input type="url" name="url" required>
        </div>

        <div class="form-group">
            <label>Execution Schedule:</label>
            <select name="schedule_type" id="schedule_type" onchange="showScheduleOptions()">
                <option value="minute">Every minute(s)</option>
                <option value="daily" selected>Every day at</option>
                <option value="monthly">Every ___ of the month at</option>
                <option value="yearly">Every year on ___ at</option>
            </select>
        </div>

        <div class="form-group" id="schedule_options">
            <!-- Schedule options will be dynamically shown here -->
        </div>

        <button type="submit">Save Cronjob</button>
    </form>

    <script>
        function showScheduleOptions() {
            const type = document.getElementById('schedule_type').value;
            let html = '';

            // สร้างตัวเลือกชั่วโมง (0-23)
            let hourOptions = '';
            for (let i = 0; i < 24; i++) {
                hourOptions += `<option value="${i}" ${i === 0 ? 'selected' : ''}>${i}</option>`;
            }

            // สร้างตัวเลือกนาที (0-59)
            let minuteOptions = '';
            for (let i = 0; i < 60; i++) {
                const minute = i < 10 ? `0${i}` : i;
                minuteOptions += `<option value="${minute}" ${i === 0 ? 'selected' : ''}>${minute}</option>`;
            }

            // สร้างตัวเลือกวัน (1-31)
            let dayOptions = '';
            for (let i = 1; i <= 31; i++) {
                dayOptions += `<option value="${i}" ${i === 1 ? 'selected' : ''}>${i}</option>`;
            }

            // สร้างตัวเลือกเดือน
            const months = [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ];
            let monthOptions = '';
            months.forEach((month, index) => {
                monthOptions += `<option value="${month}" ${month === 'January' ? 'selected' : ''}>${month}</option>`;
            });

            switch(type) {
                case 'minute':
                    html = `
                        <label>Every:</label>
                        <input type="number" name="minute_value" min="1" max="59" value="15"> minutes
                    `;
                    break;
                case 'daily':
                    html = `
                        <label>Time:</label>
                        <select name="daily_hour">${hourOptions}</select> :
                        <select name="daily_minute">${minuteOptions}</select>
                    `;
                    break;
                case 'monthly':
                    html = `
                        <label>Day:</label>
                        <select name="month_day">${dayOptions}</select>
                        <label>Time:</label>
                        <select name="month_hour">${hourOptions}</select> :
                        <select name="month_minute">${minuteOptions}</select>
                    `;
                    break;
                case 'yearly':
                    html = `
                        <label>Date:</label>
                        <select name="year_day">${dayOptions}</select>
                        <select name="year_month">${monthOptions}</select>
                        <label>Time:</label>
                        <select name="year_hour">${hourOptions}</select> :
                        <select name="year_minute">${minuteOptions}</select>
                    `;
                    break;
            }
            document.getElementById('schedule_options').innerHTML = html;
        }
        // Show initial options
        showScheduleOptions();
    </script>
</body>
</html>