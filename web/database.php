<?php
header("content-type:text/html; charset=utf-8");
//禁用错误报告
error_reporting(0);
?>

<?PHP
//include("connectionx.php");
//$data=mysql_query("select * from qq_students_home");//選擇從tbl_student資料表中讀取所有的資料

?>

<html>
<head>
<title>DataBase</title>
</head>
<body>
<h1>DataBase</h1>
<p>

</p>
<table width="700" border="1">
   <tr>
	<td >ID</td>
    <td >home</td>
    <td >passwd</td>
    <td >sch_code</td>
	<td >name</td>
    <td >photo</td>
    <td >phone</td>
	<td >email</td>
    <td >Place</td>
	<td >work</td>
    <td >to_sch_brosis</td>
	<td >to_get_info</td>
	<td >other</td>

  </tr>
  <?php
 // for($i=1;$i<=mysql_num_rows($data);$i++){
//$rs=mysql_fetch_row($data);
?>

  
  <?php
//}
?>
</table>
<p>&nbsp;</p>
</body>
</html>