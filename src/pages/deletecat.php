<?php
include 'dbh.inc.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sqldelete = "DELETE FROM category WHERE id_cat = $id";
    mysqli_query($conn, $sqldelete);
    header("location: category.php");
}
