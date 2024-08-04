<!-- <?php

session_start();
require_once 'config/db.php';


?> -->


<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขคุณครู</title>
    <link rel="stylesheet" href="edit_teacher.css">
</head>

<body>

    <div class="form-container">
        <div class="box1">
            <div class="box2">
                <h1 class="text-teacher">แก้ไขคุณครู</h1>
                <hr>
                <form action="teacher.php" method="post">
                    <!-- <?php if (isset($_SESSION['error'])) { ?>
                        <div class="alert-danger" >
                            <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($_SESSION['success'])) { ?>
                        <div class="alert-success" >
                            <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                            ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($_SESSION['warning'])) { ?>
                        <div class="alert-warning" >
                            <?php
                            echo $_SESSION['warning'];
                            unset($_SESSION['warning']);
                            ?>
                        </div>
                    <?php } ?> -->
                    <div class="form-group">
                        <label for="t_code">รหัสประจำตัว</label>
                        <input type="text" id="t_code" name="t_code">
                    </div>
                    <div class="form-group">
                        <label for="fullname">ชื่อ-นามสกุล</label>
                        <input type="text" id="fullname" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="phone">เบอร์โทร</label>
                        <input type="text" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="subject_group">กลุ่มวิชาที่สอน</label>
                        <select id="subject_group" name="subject_group">
                            <option value="">เลือกกลุ่มวิชา</option>
                            <option value="คณิตศาสตร์">คณิตศาสตร์</option>
                            <option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
                            <option value="ภาษา">ภาษา</option>
                            <option value="สังคมศาสตร์">สังคมศาสตร์</option>
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
                            <button>บันทึกข้อมูล</button>
                        </div>
                        <div class="btn-out">
                            <button onclick="window.location.href='teacher.php'">ออก</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>