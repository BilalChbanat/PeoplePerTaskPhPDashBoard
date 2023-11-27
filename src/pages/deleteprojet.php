<?php
include 'dbh.inc.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sqldelete = "DELETE FROM projets WHERE id_projet = $id";
    mysqli_query($conn, $sqldelete);
    header("location: projects.php");
}
