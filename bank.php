<?php
$db_connection = pg_connect("host=localhost dbname=bank1 user=postgres password=dragondropeone");
$query = "SELECT * FROM bank_branches WHERE ifsc='".$_GET['ifsc']."'OFFSET 10 LIMIT 10";
$result = pg_query($db_connection, "SELECT * FROM bank_branches WHERE ifsc='".$_GET['ifsc']."'");
$resultArr = pg_fetch_assoc($result);
echo json_encode($resultArr);
?>