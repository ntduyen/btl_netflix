<?php
    if(!isset($_POST['btnSignUp'])){
        header("location: signup.php");
    }

    $email = $_POST['txtEmail'];
    $user = $_POST['txtUser'];
    $pass1 = $_POST['txtPass1'];
    $pass2 = $_POST['txtPass2'];

    // Bước 01: Kết nối Database Server
    // 
    require "config/db.php";
    // Bước 02: Thực hiện truy vấn
    $sql01 = "SELECT * FROM db_nguoidung where email = '$email' or username = '$user'";
    //ở đây còn vấn đề về tính hợp lệ dữ liệu nhập vào
    //lỗi SQL Injection

    $result01 = mysqli_query($conn,   $sql01);
    if(mysqli_num_rows($result01 ) > 0){
        $error = "User or email is existed";
        header("location: signup.php?error= $error"); //Chuyển hướng về Trang signup
    }else{
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $sql02 = "INSERT INTO db_nguoidung (email,username, matkhau) VALUES ('$email','$user', '$pass_hash')";
        $result02 = mysqli_query($conn, $sql02);

        if($result02 == true){
            header("location: signin.php");
        }
        else{
            $error = " Can not insert record, please check..";
            header("location: signup.php?error= $error");
        }

        
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>