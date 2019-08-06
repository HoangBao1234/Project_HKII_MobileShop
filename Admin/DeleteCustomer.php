<?php
    include 'DBConnection.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM Customer WHERE id='$id'";
    try{
        $rs = mysqli_query($cnn, $sql);
        header("location:HomeAdmin.php");
    } catch (Exception $ex) {
        $ex->getMessage();
    }
?>