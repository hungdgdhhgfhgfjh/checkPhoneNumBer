<?php
session_start();
$_SESSION["so_vinaphone"] = "0944";
$_SESSION["so_viettell"]  = "0923";
$_SESSION["so_mobiphone"] = "0911";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";