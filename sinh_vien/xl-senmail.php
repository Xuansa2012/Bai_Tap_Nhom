
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'sendEmailv1\Exception.php';
require 'sendEmailv1\PHPMailer.php';
require 'sendEmailv1\SMTP.php';
require_once('../data_sv.php');
$maicangui=$_POST['email'];
$sql="select * from nguoidung where email='".$maicangui."'";
$data=laydata($sql);
$check="false";
if($data!=null && count($data)>0){
	$tk=$mk="";
	foreach ($data as $nguoidung) {
		$tk=$nguoidung['tai_khoan'];
		$mk=$nguoidung['mat_khau'];
		$ten=$nguoidung['ho_ten'];
	}
	$mail = new PHPMailer(true);
	try {
    //Server settings
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
	    $mail->isSMTP();// gửi mail SMTP
	    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
	    $mail->SMTPAuth = true;// Enable SMTP authentication
	    $mail->Username = 'lengxuansa2012@gmail.com';// SMTP username
	    $mail->Password = 'xuansa123456'; // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
	    $mail->Port = 587; // TCP port to connect to
	    $mail->CharSet = 'UTF-8';
	    //Recipients
	    $mail->setFrom($maicangui, 'Kích hoạt mail');

	    $mail->addReplyTo($maicangui, 'Kích hoạt mail');
	      
	    $mail->addAddress($maicangui); // Add a recipient
	    
	    // Attachments
	    // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments
	    //$mail->addAttachment('pdf/Giay_bao_mat_sau.pdf'); // Optional name

	    // Content
	    $mail->isHTML(true);   // Set email format to HTML
	    $tieude = '[Lấy Lại Mật Khẩu] Reset pass';
	    $mail->Subject = $tieude;
	    
	    // Mail body content 
	    $bodyContent = '<p>Thân gửi Tân sinh viên <b>'.$ten.'/b></h1>'; 
	    $bodyContent .= '<p>Trường Đại học Thủy lợi xin chúc mừng Em đã trở thành Tân sinh viên ngành <b>Hệ thống thông tin</b> của Khoa Công nghệ thông tin. </p>'; 
	    $bodyContent .= '<p>Mình gửi bạn tài khoản là '.$tk.'</p>'; 
	    $bodyContent .= '<p>Mình gửi bạn mật khẩu là '.$mk.'</p>'; 
	    $bodyContent .= '<p><b>Thân mến!</b></p>';
	    $bodyContent .= '<p><b></b></p>';
	    
	    $mail->Body = $bodyContent;
	    $mail->send();
	    $check="false";
		echo $check;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    /*if($mail->send()){
        echo 'Thư đã được gửi đi';
    }else{
        echo 'Lỗi. Thư chưa gửi được';
    }  
*/
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}
else{
	$check="true";
	echo $check;
}
?>


