<?php
if(isset($_POST['btnSignUp']) && $_POST['txtEmail'])
{
    //gọi lại đoạn kết nối database sever
    require "config/db.php";
    //B2: thực hiện truy vấn
    $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['txtEmail'] . "'");
    //xử lý kết quả
    if(mysqli_num_rows($result) <= 0)// kiểm tra email chưa được dùng
    {
        $name = $_POST['txtUser'];
        $email = $_POST['txtEmail'];
        $pass = password_hash($_POST['txtPass1'], PASSWORD_DEFAULT);
        $token = md5($_POST['txtEmail']).rand(10,9999);// sử dụng giải thuật md5
        $sql = "INSERT INTO users(name, email, email_verification_link ,password) VALUES($name', '$email', '$token', '$pass')";
        // lưu lại thông tin vào CSDL
        mysqli_query($conn, "INSERT INTO users(name, email, email_verification_link ,password) VALUES('$name', '$email','$token','$pass')");
        
        // sau khi lưu xong, cần gửi đến email đăng kí 1 đường link,
        // y/c người dùng nhấp để kích hoạt
        $link = "<a href='http://localhost/btl_netflix/outstory.php?key=".$email."&token=".$token."'>Nhấp vào đây để kích hoạt</a>";
        
        //quá trình gửi email
        include "send-mail.php";
        if(sendEmailForAccountActive($email, $link)){
            echo 'Vui lòng kiểm tra hộp thư của bạn để kích hoạt tài khoản';
        }else{
            echo 'Xin lỗi, email chưa được gửi. Vui lòng kiểm tra lại thông tin đăng kí tài khoản';
        }
    }
    else
    {
        echo "You have already registered with us. Check Your email box and verify email.";
    }
}
?>