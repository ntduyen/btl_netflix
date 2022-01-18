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
//         require_once('phpmail/PHPMailerAutoload.php');
//         $mail = new PHPMailer();
//         $mail->CharSet =  "utf-8";
//         $mail->IsSMTP();
// // enable SMTP authentication
//         $mail->SMTPAuth = true;                  
// // GMAIL username
//         $mail->Username = "your_email_id@gmail.com";
// // GMAIL password
//         $mail->Password = "your_gmail_password";
//         $mail->SMTPSecure = "ssl";  
// // sets GMAIL as the SMTP server
//         $mail->Host = "smtp.gmail.com";
// // set the SMTP port for the GMAIL server
//         $mail->Port = "465";
//         $mail->From='your_gmail_id@gmail.com';
//         $mail->FromName='your_name';
//         $mail->AddAddress('reciever_email_id', 'reciever_name');
//         $mail->Subject  =  'Reset Password';
//         $mail->IsHTML(true);
//         $mail->Body    = 'Click On This Link to Verify Email '.$link.'';
        // if($mail->Send())
        // {
        // echo "Check Your Email box and Click on the email verification link.";
        // }
        // else
        // {
        //     echo "Mail Error - >".$mail->ErrorInfo;
        // }
    }
    else
    {
        echo "You have already registered with us. Check Your email box and verify email.";
    }
}
?>