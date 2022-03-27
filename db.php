<?php

$db = mysqli_connect('localhost', 'root', '', 'test');

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $time = date("H:i:s");
    mysqli_query($db, "INSERT INTO lists (title, time) VALUES ('$title', '$time')");
    header("location: index.php");
} else {
    if (isset($_GET['mark'])) {
        $id = $_GET['mark'];
        mysqli_query($db, "DELETE FROM lists WHERE id=$id");
        header("location: index.php");
    }
    
};

   
    