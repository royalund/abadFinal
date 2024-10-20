<?php 
    include './db_connect.php';
    $sql = "SELECT * FROM room WHERE status = '1'";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>