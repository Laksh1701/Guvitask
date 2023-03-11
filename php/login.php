<?php
    header("Access-Control-Allow-Origin: *");

    $data = $_POST;

   echo $data["username"] . " " . $data["password"];
?>