<?php
session_start();
?>
<?php
include('../db/connect.php');
?>
<?php
//session_destroy();
//unset('dangnhap');
if(isset($_POST['dangnhap'])){
    $taikhoan=$_POST['taikhoan'];
    $matkhau=md5($_POST['matkhau']);
    if($taikhoan==''||$matkhau==''){
        echo '<p>Xin nhập đủ tài khoản và mật khẩu</p>';
    }else{
        $sql_select_admin=mysqli_query($mysqli,"select * from admin where email='$taikhoan' and password='$matkhau' limit 1");
        $count=mysqli_num_rows($sql_select_admin);
        $row_dangnhap=mysqli_fetch_array($sql_select_admin);
        if($count>0){
            $_SESSION['dangnhap']=$row_dangnhap['admin_name'];
            $_SESSION['admin_id']=$row_dangnhap['admin_id'];
            header('location:dashboard.php');
        }else{
            echo '<p>Tài khoản hoặc mật khẩu sai</p>';
        }
        
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Đăng nhập quảng trị</title>
<meta charset="UTF-8" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<h1 align="center">Đăng nhập admin</h1>
<div class="col-md-6">
<div class="form-group">
    <form action="" method="POST">
        <label>Tài khoản</label>
        <input type="text" name="taikhoan" placeholder="Điền Email" class="form-control"><br>
        <label>Mật khẩu</label>
        <input type="password" name="matkhau" placeholder="Điền mật khẩu" class="form-control">
        <input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập">
    </form>
</div>
</div>
</body>
</html>