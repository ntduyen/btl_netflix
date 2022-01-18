<?php
    $username = 'duyenbeofcbb@gmail.com';
    $password = 'rlfuhsonlnafqvyc';
    
// Thư viện xử lý gửi nhận Email : PHPMailer, sendMail
// 1. Khai báo thư viện sendMail
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
// 2. sử dụng thư viện này đẻ gửi email(localhost) tới 1 tài khoản email bất kỳ

    function sendEmailForAccountActive($email, $link){
        global $username;
        global $password;
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $username;                     // địa chỉ email đóng vai trò gửi thư
            $mail->Password   = $password;                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->CharSet    = 'UTF-8';
            //Recipients
            $mail->setFrom('duyenbeofcbb@gmail.com', 'Nguyen Thi Duyen');
            $mail->addAddress($email);     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('documents/logo.png');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = '[netflix.vn]  Active your account';
            $mail->Body    = 'Chào mừng bạn đến  với Netflix. Để sử dụng tài khoản, ' .$link;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
           if($mail->send()){
                return true;
           }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        return false;
    }
?> 