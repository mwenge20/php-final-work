<?php
if(!mysql_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("test"))
{
     die('oops database selection problem ! --> '.mysql_error());
}

//get data
$a = $_POST['id'];
$b = $_POST['bus_num'];
$c = $_POST['day'];
$d = $_POST['month'];
$e = $_POST['type'];
$k = $_POST['board'];
$l = $_POST['root'];
$m = $_POST['too'];
$n = $_POST['mobile'];


$na = $_POST['name'];
$nb = $_POST['age'];
$nc = $_POST['adress'];
$nd = $_POST['nationality'];
$ne = $_POST['passport'];
$nf = $_POST['gender'];
$nj = $_POST['berth'];

//insert into the table
$sql = "insert into tikect(id, bus_num, day, month, type, board, root, too, mobile, name, age, adress, nationality, passport, gender, berth ) values('$a', '$b', '$c', '$d', '$e', '$k', '$l', '$m', '$n', '$na', '$nb', '$nc', '$nd', '$ne', '$nf', '$nj' )";
$res = mysql_query($sql) or die("ooops");

if($res){
echo "thanks you <a href='system.php'>go back</a>";
}else{
	echo "Error Check your administration";

 }



?>

