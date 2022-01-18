<?php
    if(isset($_POST['btnSignUp']) && $_POST['txtEmail'])
    {
        require "config/db.php";
        $sql = " SELECT * FROM users WHERE email='" . $_POST['txtEmail'] . "'";
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)) < 0)
        {
            $token = md5($_POST['txtEmail']).rand(10,9999);
            // lưu lại thông tin đăng kí vào cơ sở dữ liệu
            $user = $_POST['txtUser'];
            $email = $_POST['txtEmail'];
            $pass = password_hash($_POST['txtPass1'], PASSWORD_DEFAULT);

            //ra lệnh lưu vào csdl
            mysqli_query($conn, "INSERT INTO users(name, email, email_verification_link ,password) VALUES('$user', '$email','$token','$pass')");
          
            // gửi tới email đki link dẫn tới trang chủ
            $link = "<a href='http://localhost/btl_netflix/ourstory.php?key=".$_POST['txtEmail']."&token=".$token."'>Nhấp vào đây để kích hoạt</a>";
            
            // quá trình gửi mail
            include "send-mail.php";
            if(sendEmailForAccountActive($email, $link)){
                echo "Vui lòng kiểm tra hộp thư của bạn, để kích hoạt tài khoản ";
            }
            else{
                echo "Xin lỗi email chưa đước gửi, vui lòng kiểm tra lại thông tin đăng kí"
            }
            // require_once('phpmail/PHPMailerAutoload.php');
            // $mail = new PHPMailer();
            // $mail->CharSet =  "utf-8";
            // $mail->IsSMTP();
            // enable SMTP authentication
//             $mail->SMTPAuth = true;                  
// // GMAIL username
//             $mail->Username = "your_email_id@gmail.com";
// // GMAIL password
//             $mail->Password = "your_gmail_password";
//             $mail->SMTPSecure = "ssl";  
// // sets GMAIL as the SMTP server
//             $mail->Host = "smtp.gmail.com";
// // set the SMTP port for the GMAIL server
//             $mail->Port = "465";
//             $mail->From='your_gmail_id@gmail.com';
//             $mail->FromName='your_name';
//             $mail->AddAddress('reciever_email_id', 'reciever_name');
//             $mail->Subject  =  'Reset Password';
//             $mail->IsHTML(true);
//             $mail->Body    = 'Click On This Link to Verify Email '.$link.'';
//             if($mail->Send())
//             {
//                 echo "Check Your Email box and Click on the email verification link.";
//             }
//             else
//             {
//                 echo "Mail Error - >".$mail->ErrorInfo;
//             }
        }
        else
        {
            echo "You have already registered with us. Check Your email box and verify email.";
        }
    }
?>