<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hiển Thị Danh Sách</title>
</head>
<body>
<div class="main_content">
        <h1>Danh sách phòng ban</h1>
    </div>
    <div class="addphongbn">
        <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i> <a style="text-decoration: none; color:#fff" href="./add-patient.php">Thêm thông tin</a></button>
    </div>

    <main>
        <table class="table table-sm">

            <thead>
                <tr>
                    <th scope="col">Mã bệnh nhân</th>
                    <th scope="col">Tên </th>
                    <th scope="col">Họ tên đệm</th>
                    <!-- <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th> -->
                    <th scope="col">Số điện thoại</th>
                    <!-- <th scope="col">Email</th>
                    <th scope="col">Chiều cao</th>
                    <th scope="col">Cân nặng</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">Ngày lập sổ</th>
                    <th scope="col">Ngày cập nhật</th> -->
                    <th scope="col">Chi tiết</th>
                    <th scope="col">Sửa thông tin</th>
                    <th scope="col">Xóa thông tin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Quy trình 4 bước 
                // Bước 1: Kết nối tới cơ sở dữ liệu
                include('./config.php');
                // Bước 2: Khai báo biến sql và thực hiện truy vấn
                $sql = "Select * from PATIENT";
                $result = mysqli_query($conn, $sql); // Lưu kết quả vào resylt
                //  Bước 3: Phân tích và xử lý kết quả 
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <th> <?php echo $row['patientid'] ?> </th>
                            <td> <?php echo $row['firstname']  ?> </td>
                            <td> <?php echo  $row['lastname']  ?> </td>                          
                            <td> <?php echo  $row['mobile']?></td>                           
                            <td> <a class="btn btn-success" href="information-patient.php?patientid=<?php echo $row['patientid']; ?>">Xem</a> <i class="fas fa-eye"></i></td>                          
                            <td> <a class="btn btn-info" href="update-patient.php?patientid=<?php echo $row['patientid']; ?>">Sửa</a> <i class="fas fa-user-edit"></i></td>                          
                            <td> <a class="btn btn-danger" href="delete-patient.php?patientid=<?php echo $row['patientid']; ?>">Xóa</a> <i class="fas fa-user-minus"></i></td>                          
                          
                        </tr>
                <?php    }
                } ?>


            </tbody>
        </table>
    </main>
</body>
</html>