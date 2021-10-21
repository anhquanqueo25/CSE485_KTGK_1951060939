<?php
    include('./config.php');
    if(isset($_GET['patientid'])){
        $patientid =$_GET['patientid'];
       
        $sql1 ="SELECT * FROM `patient` WHERE patientid = '$patientid'";
        $result1 = mysqli_query($conn,$sql1);
        if($result1){
            $row  = mysqli_fetch_assoc($result1);
            $patientid1 =$row['patientid'];
            $fname1 = $row['firstname'];
            $lname1 = $row['lastname'];
            $date1 = $row['dateofbirth'];
            $gender1 = $row['gender'];
            $mobile1 = $row['mobile'];
            $email1 = $row['email'];
            $height1 = $row['height'];
            $weight1 = $row['weight'];
            $blood_type1 = $row['blood_type'];
            $created_on1 = $row['created_on'];
            $modified_on1 = $row['modified_on'];

        }
    }
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

        $sqlq = "UPDATE PATIENT SET `firstname`='$fname',`lastname`='$lname ',`dateofbirth`='$date',`gender`=' $gender',`mobile`='$mobile',`email`='$email',`height`='$height',`weight`='$weight',`blood_type`='$blood_type',`created_on`='$created_on',`modified_on`='$modified_on' 
        WHERE patientid = '$patientid'";
        $kq = mysqli_query($conn, $sqlq);
        if($kq>0){
            echo 'Bản ghi đã được lưu';
            header("Location: index.php ");
 
        }
        else{
            echo 'Lỗi';
            // header("Location: error.php ");
        }
       
    }
?>
   <div class="form-group row">
        <label for="empPostion" class="col-sm-2 col-form-label">Mã bệnh nhân</label>
        <div class="col-sm-10">
            <input readonly type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $patientid1;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="empPostion" class="col-sm-2 col-form-label">Tên</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo  $fname1;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="empEmail" class="col-sm-2 col-form-label">Họ tên đệm</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lname1;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Ngày sinh</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" value="<?php echo $date1;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Giới tính</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="gender" name="gender" value="<?php echo  $gender1;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Số điện thoại</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" id="mobile" name="mobile" value="<?php echo  $mobile1;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" id="email" name="email" value="<?php echo  $email1;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Chiều cao</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="height" name="height" value="<?php echo  $height1;?>"> 
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Cân nặng</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="weight" name="weight" value="<?php echo $weight1 ;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Nhóm máu</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="blood_type" name="blood_type" value="<?php echo $blood_type1;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Ngày lập sổ</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="created_on" name="created_on" value="<?php echo  $created_on1;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="empMobile" class="col-sm-2 col-form-label">Ngày cập nhật</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="modified_on" name="modified_on" value="<?php echo  $modified_on1;?>">
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="empEmail" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
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
