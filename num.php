<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

<?php

$id = $_GET['id'];

//$id="1' union select '2','ddd'#";

echo "id的内容为：" . $id . "<br>";

$conn = mysqli_connect("localhost", "root", ""); //连接数据库引擎

if (!$conn) {
    die('could not connect:' . mysql_error());
} else {
    echo "数据库连接成功！<br>";
}

$db = mysqli_select_db($conn, "exam");
$sql = mysqli_query($conn, 'SET NAMES utf8');
$sql = "select * from phpyun_ad_class where id=$id limit 0,1";

echo "注入后的SQL语句为：" . $sql . "<br>";

$do = mysqli_query($conn, $sql);
//$row=mysqli_fetch_row($do);
if ($do) {
    echo "该sql语句成功执行！<br>执行结果为:OK<br>";
    while ($row = mysqli_fetch_row($do)) {
        echo $row[0] . "<--->" . $row[1] . "<--->" . $row[2] . "<--->" . $row[3];
        echo "<br>";
    }
} else {echo "<br>该语句没有成功执行！请返回查看<br>";
    echo mysqli_error($conn);
}
?>

</html>
