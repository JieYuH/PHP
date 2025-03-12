<html>

<head>
<Title>
<body bgcolor="linen" text="#b2936c">
</Title>
</head>

<body>
<body bgcolor="linen" text="#b2936c">
<font size="4" >
<img src="\picture\Thankyou.jpg" width="300">
<br>
以下為您的報名資訊🫰~<br>
<?php
$uGender=$_GET["uGender"];
$uName=$_GET["uName"];
$uBirth=$_GET["uBirth"];
$uDepartment=$_GET["uDepartment"];
$uID=$_GET["uID"];
$uPhone=$_GET["uPhone"];
$uEat=$_GET["uEat"];
$uComment=$_GET["uComment"];

echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
echo "性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;別 : ". $uGender."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名 : ". $uName."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日 : ". $uBirth."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "科&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;系 : ". $uDepartment."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "身分字號 : ". $uID."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "連絡電話 : ". $uPhone."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "特殊飲食 : ". $uEat."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "想說的話 : ". nl2br($uComment)."<br>";

?>
<br>
✉️若有任何問題請聯絡👇
<br>
mail:a1123357@mail.nuk.edu.tw
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="\picture\nukim.png" width="100">
</body>


</html>
