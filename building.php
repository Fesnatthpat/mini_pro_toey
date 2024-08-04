<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลอาคารเรียน</title>
    <link rel="stylesheet" href="data-subject_group.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="box-1">
            <div class="box-2">
                <div class="text-1">
                    <h1>ข้อมูลอาคารเรียน</h1>
                </div>
                <div class="search-form">
                    <div class="form-group">
                        <label for="search-name">ชื่ออาคารเรียน</label>
                        <input type="text" id="search-name" name="search-name">
                    </div>
                    
                    <div class="form-group">
                        <button type="button">บันทึกข้อมูล</button>
                    </div>
                </div>
                <div class="btn-con">
                    <button class="add-student-button" onclick="window.location.href='add-building.php'">+ เพิ่มอาคารเรีบน</button>
                    <button class="out-student-button" onclick="window.location.href='home.php'">ออก</button>
                </div>
                <div class="group-form1">
                    <div class="group-form2">
                        <table>
                            <thead>
                                <tr>
                                    <th>ชื่ออาคาร</th>
                                    <th>การจัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A</td>
                                    <td><a href="edit_building.php"><i class="fa-solid fa-pen"></i></a> | <a href="#"><i class="fa-solid fa-trash"></i></a></td>
                                <tr>
                                    <td>B</td>
                                    <td><a href="edit_building.php"><i class="fa-solid fa-pen"></i></a> | <a href="#"><i class="fa-solid fa-trash"></i></a></td>                                    
                                </tr>
                                <tr>
                                    <td>C</td>
                                    <td><a href="edit_building.php"><i class="fa-solid fa-pen"></i></a> | <a href="#"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>


                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>