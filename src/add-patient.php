<?php
    include('./config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<main class="container">
    <h2>Điền thông tin </h2>
   <form action="" method="post">
   
    <div class="form-group row">
        <label for="empPostion" class="col-sm-2 col-form-label">Tên</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
    </div>
    <div class="form-group row">
        <label for="empEmail" class="col-sm-2 col-form-label">Họ tên đệm</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Ngày sinh</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Giới tính</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="gender" name="gender">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Số điện thoại</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" id="mobile" name="mobile">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" id="email" name="email">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Chiều cao</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="height" name="height">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Cân nặng</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="weight" name="weight">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Nhóm máu</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="blood_type" name="blood_type">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Ngày lập sổ</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="created_on" name="created_on">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Ngày cập nhật</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="modified_on" name="modified_on">
        </div>
    </div>
    <br>
    
    <div class="form-group row">
        <label for="empEmail" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">Thêm bản ghi</button>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="empEmail" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
      <a href="./index.php" class="btn btn-primary">Trang Chủ</a> 
        </div>
    </div>
    
    </form>
</main>
</body>
</html>
<?php
    if(isset($_POST['submit'])){

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $date = $_POST['dateofbirth'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $blood_type = $_POST['blood_type'];
        $created_on = $_POST['created_on'];
        $modified_on = $_POST['modified_on'];

        $sql = "INSERT INTO `patient`(`firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) 
        VALUES ('$fname','$lname','$date','$gender',' $mobile',' $email','$height','$weight','$blood_type',' $created_on',' $modified_on')";
        $result = mysqli_query($conn, $sql);
        if($result >0){
            echo 'Bản ghi đã được lưu';
            header("Location: index.php ");
            die();  
        }
        else{
            header("Location: error.php ");
        }
       
    }
?>