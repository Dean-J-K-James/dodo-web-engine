<?php
$dbh = new PDO("mysql:host=localhost;dbname=" . getenv("DATABASE"), "root", "");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);