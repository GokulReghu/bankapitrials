<?php
$O=0;
$L=10;
if($_GET['O'] != NULL) {
	$O=$_GET['O'];
}
if($_GET['L'] != NULL) {
	$L=$_GET['L'];
}
$db_connection = pg_connect("host=ec2-54-221-198-156.compute-1.amazonaws.com dbname=d45a4or7lhq7uu user=qguoalgvcjdlct password=028fb3f0e85ca4b531a7088ff130893275daa5b762ae9c1be4143607d2aab02f");
$query = "SELECT * FROM bank_branches WHERE bank_name='".$_GET['bank']."' AND city='".$_GET['city']."' OFFSET '".$O."' LIMIT '".$L."'";
$result = pg_query($db_connection, $query);
$resultArr = pg_fetch_all($result); 
echo json_encode($resultArr);
?>