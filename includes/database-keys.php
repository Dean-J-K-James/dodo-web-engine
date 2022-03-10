<?php
$dbh = new PDO("mysql:host=localhost;dbname=" . getenv("DB_NAME"), getenv("DB_USER"), getenv("DB_PASS"));
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);