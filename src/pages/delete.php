<?php
include 'dbh.inc.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sqldelete = "DELETE FROM user WHERE id_user = $id";
    mysqli_query($conn, $sqldelete);
    header("location: dashclient.php");
}
