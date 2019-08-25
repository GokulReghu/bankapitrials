<?php
$db_connection = pg_connect("host=ec2-54-221-198-156.compute-1.amazonaws.com dbname=d45a4or7lhq7uu user=qguoalgvcjdlct password=028fb3f0e85ca4b531a7088ff130893275daa5b762ae9c1be4143607d2aab02f");
$query = "SELECT * FROM bank_branches WHERE ifsc='".$_GET['ifsc']."'OFFSET 10 LIMIT 10";
$result = pg_query($db_connection, "SELECT * FROM bank_branches WHERE ifsc='".$_GET['ifsc']."'");
$resultArr = pg_fetch_assoc($result);
echo json_encode($resultArr);
?>