<?php 
    include './db_connect.php';
    $sql = "SELECT * FROM staff";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>