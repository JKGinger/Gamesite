<?php

$servername = "mtrasmussen.dk.mysql";
$dBUsername = "mtrasmussen_dkloginsystem";
$dBPassword = "Mart973f";
$dBName     = "mtrasmussen_dkloginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed; ".mysqli_connect_error());
}
