<?php

require_once('../controller/header.php');
session_start();
setcookie('flag', 'true', time() - 10, '/');
header('location: login.php');
