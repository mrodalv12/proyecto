<?php
require_once '../includes/MySQL.inc';

session_start();

$_SESSION = [];
session_destroy();

header("Location: " . BASE_URL . "index.php?logout=ok");
exit();