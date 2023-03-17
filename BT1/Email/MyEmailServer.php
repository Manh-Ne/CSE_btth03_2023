<?php
require_once("EmailServerInterface.php");
require_once("../vendor/autoload.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class MyEmailServer implements EmailServerInterface {
    public function sendEmail($to, $subject, $message) {
        $code = rand(100000, 999999);
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'manhnguyenquang13@gmail.com';
            $mail->Password = 'ikzzofhpbwvuwklc';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->CharSet = 'UTF-8';
            // Set the email message and recipients
            $mail->isHTML(true);
            $mail->setFrom('manhnguyenquang13@gmail.com', 'Mạnh'); //thiết lập người gửi email có 2 tham số: 1:địa chỉ email của người gửi 2:tên người gửi
            $mail->addAddress($to);
            $mail->addReplyTo('info@example.com', 'Information'); //them dia chi phan hoi
            $mail->Subject = $subject; //tiêu đề
            $mail->Body = $message; //nội dung

            // Send the email
            $mail->send();
            echo '<script>alert("Vui lòng vô email của bạn để lấy mã");</script>';
        } catch (Exception $e) {
            echo 'Error sending email: ', $mail->ErrorInfo;
        }
    }
}
;
?>