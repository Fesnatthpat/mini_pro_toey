<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลนักเรียน</title>
    <link rel="stylesheet" href="edit_student.css">
</head>

<body>

    <div class="form-container">
        <div class="box1">
            <div class="box2">
                <h1 class="text-teacher">แก้ไขข้อมูลนักเรียน</h1>
                <hr>
                <div>
                    <div class="form-group">
                        <label for="student-id">รหัสประจำตัว</label>
                        <input type="text" id="student-id" name="student-id">
                    </div>
                    <div class="form-group">
                        <label for="name">ชื่อ-นามสกุล</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">เบอร์โทร</label>
                        <input type="text" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="level">ระดับชั้น</label>
                        <select id="level" name="level">
                            <option value="">เลือกระดับชั้น</option>
                            <option value="1">ม.1</option>
                            <option value="2">ม.2</option>
                            <option value="3">ม.3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="photo">รูปถ่าย</label>
                        <input type="file" id="photo" name="photo">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <div class="btn-con">
                        <div class="btn-submit">
                            <button  type="submit">บันทึกข้อมูล</button>
                        </div>
                        <div class="btn-out">
                            <button onclick="window.location.href='data-student.php'">ออก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>