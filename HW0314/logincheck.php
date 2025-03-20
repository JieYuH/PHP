<?php
session_start();
?>

<h1>Login result</h1>

<?php
echo"<body bgcolor='linen' text='#b2936c'>";
$defaultName="nuk";
$defaultPwd="12345";

$userN="user";
$userP="0000";

$userName=$_POST["userName"];
$userPwd=$_POST["userPwd"];

/*echo $userName;
echo "<br>";
echo $userPwd."<br>";*/

if($defaultName==$userName && $defaultPwd==$userPwd)
{
    echo "Login success";
    $_SESSION["admin"]=1;
    $cookiedate=strtotime("+10 seconds",time());
    setcookie("userName",$defaultName,$cookiedate);
    header("Location:admin.php");//馬上跳到那一頁
}else if($userN==$userName && $userP==$userPwd)
{
    echo "Login success";
    $_SESSION["user"]=1;
    $cookiedate=strtotime("+10 seconds",time());
    setcookie("userName",$userN,$cookiedate);
    header("Location:form.php");//馬上跳到那一頁
}else
{
    echo "Login failed, will send you back to login again";
    header("Refresh:3;url='login.php'");//會經過X秒才跳頁
}

?>