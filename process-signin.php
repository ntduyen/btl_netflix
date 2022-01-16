<?php
    //tạo session mặc định mỗi phiên làm việc có thời hạn 24phuts
    session_start();
    // signin.php TRUYỀN DỮ LIỆU SANG process-signin: NHẬN DỮ LIỆU TỪ signin.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPass'];
        
        $conn = mysqli_connect('localhost','root','','nextflix');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        
        $sql = "SELECT * FROM db_nguoidung where email = '$email' AND matkhau = '$pass'";
        
        $result = mysqli_query($conn,$sql);
    
        if(mysqli_num_rows($result ) > 0){
            $_SESSION['isLoginOK'] = $email;
            header("location: main.php"); 
        }else{
            $error = "Bạn nhập Email hoặc Mật khẩu chưa chính xác";
            header("location: signin.php?error= $error"); //Chuyển hướng, hiển thị thông báo lỗi
        }
    
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:main.php");
    }
?>