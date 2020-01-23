<?php
$db = pg_connect("host=ec2-23-21-13-88.compute-1.amazonaws.com port=5432 dbname=d3foju9tci8mh4 user=asjjetcaygqmyt password=96d22ad7da0a999ffa24ca88306db22cc966438f5dea656af2d175beef93a8f3");
$query = "INSERT INTO user_rec VALUES ('$_POST[firstname]','$_POST[lastname]')";
$result = pg_query($query); 
?>


