<?php

require("connectDB.php");

$stmt = $db->query("SELECT username,email FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);