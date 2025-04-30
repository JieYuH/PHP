<html>

<head>

<meta charset="utf-8">

</head>

<body bgcolor="linen" text="#b2936c">

<?php

$name=$_POST["name"];
$email=$_POST["email"];

if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_FILES["file"]["name"])) 
{
    echo "註冊失敗，三秒後回到註冊頁面<br><br>";
    header("Refresh:3;url=register.php");
}
else 
{
    echo "name:$name<br><br>";
    echo "email:$email<br><br>";

    $FileName=$_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"], $FileName);

    if(file_exists($FileName))
    {
        echo"photo:<img src='$FileName' width='20%'><br>";
    }
}


?>

<br><br>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'Joannahuang9271@gmail.com';                     //SMTP username
    $mail->Password   = 'arwt igdw vlui jldz';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->Charset    = "UTF-8";
    
    
    $mail->setFrom('Joannahuang9271@gmail.com', 'Mailer');
    
    if(!empty($_POST["email"])) 
    {
        $mail->addAddress($email);
    }
    $mail->addAddress('Joannahuang9271@gmail.com');               
    
    $mail->isHTML(true);                                  
    if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_FILES["file"]["name"])) 
    {
        $subject="註冊失敗";
        $subject="=?UTF-8?B?".base64_encode($subject)."?=";
        $mail->Subject = $subject;
        $mail->Body    = "註冊失敗，請再次重新註冊";
    }
    else
    {
        //$subject="註冊成功";
        $subject="=?UTF-8?B?".base64_encode("註冊成功")."?=";
        $mail->Subject = $subject;
        $mail->Body    = "恭喜註冊成功<br>"."name:".$name."<br>photo:";
        $mail->addAttachment($FileName, 'photo.jpg');
    }
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_FILES["file"]["name"])) 
    {
        $link = mysqli_connect( 
            'localhost',  
            'root',       
            '',  
            '0425HW'); 
        mysqli_set_charset($link,'utf8');
        
        $sql="INSERT INTO user(name,email,photo) VALUES ('$name','$email','$FileName') ";
        mysqli_query($link, $sql);
    }


?>

</body>
</html>