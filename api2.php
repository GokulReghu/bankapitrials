<?php
$O=0;
$L=10;
if($_GET['O'] != NULL) {
	$O=$_GET['O'];
}
if($_GET['L'] != NULL) {
	$L=$_GET['L'];
}
$db_connection = pg_connect("host=localhost dbname=bank1 user=postgres password=dragondropeone");
$query = "SELECT * FROM bank_branches WHERE bank_name='".$_GET['bank']."' AND city='".$_GET['city']."' OFFSET '".$O."' LIMIT '".$L."'";
$result = pg_query($db_connection, $query);
$resultArr = pg_fetch_all($result); 
echo json_encode($resultArr);
?>