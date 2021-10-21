<?php
include('./config.php');
$patientid= $_GET['patientid'];
$sql = "delete from `patient` where patientid='$patientid'";
$result= mysqli_query($conn,$sql);
if($result)
{
    header('location:index.php');
}
else
{
    header('location:error.php');
    
}
?>