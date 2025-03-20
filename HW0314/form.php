<html>

<head>

<Title>
行程與報名表單
</Title>

<meta charset="utf-8">

</head>

<body>
<?php
session_start();




if(isset($_SESSION["user"]))
{
    echo "<h2>Welcome user!<br></h2>";
    echo "<h3><a href='logout.php'>Logout</a></h3>";
    echo "<font size='4'>";
    echo "<body bgcolor='linen' text='#b2936c'>";
    echo "<center><img src='\picture\p2.png' width='200'></center>";
    echo "<HR width='80%' color='#9b815f'>";

    echo "<center><h3><B>行程表</B></h3>";
    echo "Day1";
    echo "<table border='1'>";
    echo "<tr><td>時間</td><td>地點</td></tr>";
    echo "<tr><td>7:30~7:45</td><td>高大管院集合</td></tr>";
    echo "<tr><td>7:45~10:30</td><td>國道超級美景</td></tr>";
    echo "<tr><td>10:30~12:30</td><td>破冰遊戲</td></tr>";
    echo "<tr><td>12:00~13:30</td><td>午餐&休息</td></tr>";
    echo "<tr><td>13:30~17:30</td><td>后豐鐵馬道</td></tr>";
    echo "<tr><td>17:30~18:30</td><td>晚餐</td></tr>";
    echo "<tr><td>18:30~21:30</td><td>團康</td></tr>";
    echo "<tr><td>21:30</td><td>回飯店</td></tr>";
    echo "</table>";
    echo "<br>";
    echo "Day2";
    echo "<table border='1'>";
    echo "<tr><td>時間</td><td>地點</td></tr>";
    echo "<tr><td>8:00~9:00</td><td>早餐</td></tr>";
    echo "<tr><td>9:00~12:30</td><td>幻覺博物館</td></tr>";
    echo "<tr><td>12:30~13:30</td><td>午餐&休息</td></tr>";
    echo "<tr><td>13:30~16:30</td><td>勤美&團康</td></tr>";
    echo "<tr><td>16:30~17:30</td><td>晚餐</td></tr>";
    echo "<tr><td>17:30~20:00</td><td>一中街</td></tr>";
    echo "<tr><td>20:00~21:30</td><td>幽靈船探險</td></tr>";
    echo "<tr><td>21:30</td><td>回飯店</td></tr>";
    echo "</table>";
    echo "<br>";
    echo "Day3";
    echo "<table border='1'>";
    echo "<tr><td>時間</td><td>地點</td></tr>";
    echo "<tr><td>8:00~9:00</td><td>早餐</td></tr>";
    echo "<tr><td>9:00~10:00</td><td>宮原眼科</td></tr>";
    echo "<tr><td>10:00~12:30</td><td>尋寶</td></tr>";
    echo "<tr><td>12:30~13:30</td><td>午餐&休息</td></tr>";
    echo "<tr><td>13:30~15:30</td><td>幻覺博物館</td></tr>";
    echo "<tr><td>15:30~17:30</td><td>奶油飯店</td></tr>";
    echo "<tr><td>17:30~18:30</td><td>晚餐&休息</td></tr>";
    echo "<tr><td>18:30</td><td>回高大~</td></tr>";
    echo "</table>";

    echo "<BR>";
        echo "<HR width='80%' color='#9b815f'>";
    echo "<h2>📝報名表單📝</h2>";
    echo "&nbsp;&nbsp;<img src='\picture\p3.jpg' width='100'>";
    echo "<form action='result.php' method='GET'>";

    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;別 : ";
    echo "男<input type='radio' name='uGender' value='男'>";
    echo "女<input type='radio' name='uGender' value='女'>";
    echo "其他<input type='radio' name='uGender' value='其他'><br>";

    echo "生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日 : <input type='date' name='uBirth' ><BR>";
    echo "姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名 : <input type='text' name='uName' ><BR>";
    echo "科&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;系 : <input type='text' name='uDepartment'><BR>";
    echo "身分字號 : <input type='text' name='uID'><BR>";
    echo "連絡電話 : <input type='tel' name='uPhone'><BR>";
    echo "特殊飲食 : <input type='text' name='uEat'><BR>";

    echo "想說的話👇: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<textarea cols='28' rows='6' name='uComment'>";
    echo "</textarea>";


    echo "<input type='submit'><input type='reset'>";
    echo "</form>";
    echo "</center>"; 
}
else
{
    echo "illegal user!";
    header("Refresh:2;url='login.php'");
}
?>
    
</body>

</html>
