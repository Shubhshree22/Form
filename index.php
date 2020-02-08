<?php include_once("home.html"); ?>
<?php
$db = pg_connect("host=ec2-3-213-192-58.compute-1.amazonaws.com port=5432 dbname=d7l2kkp3dbh528 user=vukesdjwuboehi password=87fe14c4854fc8bfbea10ae0fcd8a8a12cf2e47296d118fcea47f40bc363017b");
$query = "INSERT INTO user_rec_table VALUES ('$_POST[firstname]','$_POST[lastname]')";
$result = pg_query($query); 
?>


