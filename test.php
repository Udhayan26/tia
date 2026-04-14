<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "PHP is working. Current version: " . phpversion();
require __DIR__.'/../vendor/autoload.php';
echo "<br>Vendor folder found!";
