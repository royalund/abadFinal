<?php 
    include './db_connect.php';
    $sql = "SELECT * FROM booking";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>