<?php
include_once 'config/config.php';   // As functions.php is not included
$conmysql = new mysqli(db_host, db_user, db_password, db_name);