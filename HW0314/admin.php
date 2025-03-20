<?php
session_start();

if(isset($_SESSION["admin"]))
{
    echo "<a href='logout.php'>Logout</a>";
    echo "<center>";
    echo "<font size='4'>";
    echo"<body bgcolor='linen' text='#b2936c'>";
    echo "Welcome admin!<br>";
    echo "以下為所有報名者資訊<br>";
    echo "<HR width='80%' color='#9b815f'>";
    echo "<目前無人報名>";
    echo "</center>";
}
else
{
    echo "illegal user!";
    header("Refresh:2;url='login.php'");
}


?>