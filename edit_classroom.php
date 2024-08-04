<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มห้องเรียน</title>
    <link rel="stylesheet" href="edit_classroom.css">
</head>

<body>

    <div class="form-container">
        <div class="box1">
            <div class="box2">
                <h1 class="text-teacher">เพิ่มห้องเรียน</h1>
                <hr>
                <div>
                    <div class="form-group">
                        <label for="student-id">หมายเลขห้อง</label>
                        <input type="text" id="student-id" name="student-id">
                    </div>
                    <div class="form-group">
                        <label for="level">อาคารเรียน</label>
                        <select id="level" name="level">
                            <option value="">เลือกอาคารเรียน</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="level">ชั้น</label>
                        <select id="level" name="level">
                            <option value="">เลือกชั้น</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="photo">รูปห้องเรียน</label>
                        <input type="file" id="photo" name="photo">
                    </div>
                    <div class="btn-con">
                        <div class="btn-submit">
                            <button type="submit">บันทึกข้อมูล</button>
                        </div>
                        <div class="btn-out">
                            <button onclick="window.location.href='data-classroom.php'">ออก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>