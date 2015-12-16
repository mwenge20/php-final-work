<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("test",$conn);
$result = mysql_query("SELECT * FROM members WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["user_id"] = $row[user_id];
$_SESSION["user_name"] = $row[user_name];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_id"])) {
header("Location: system.php");
}
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body bgcolor="#000000">
<div align="center">
  <p><img src="MG.JPG" alt="AA" width="701" height="137"></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
</div>
<P></P>
<table width="750" border="0" align="center">
  <tr>
    <td width="744" height="116" bgcolor="#FFFFFF"><form name="frmUser" method="post" action="">
      <div class="message">
        <?php if($message!="") { echo $message; } ?>
      </div>
      <p>&nbsp;</p>
      <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
        <tr class="tableheader">
          <td align="center" colspan="2" ><h4>Admin Login</h4></td>
        </tr>
        <tr class="tablerow">
          <td align="right">Username</td>
          <td><input type="text" name="user_name"></td>
        </tr>
        <tr class="tablerow">
          <td align="right">Password</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr class="tableheader">
          <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      </form></td>
  </tr>
  <tr>
    <td height="21" bgcolor="#FFFFFF"><div align="center">(c) Copyright 2015 link buses. All rights reserved </div></td>
  </tr>
</table>
<P></P>
<iframe src="h