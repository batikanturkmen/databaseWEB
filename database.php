<?php

$databaseConfig = Array(
        "db" => "cargo12345",
        "server" => "cargo12345.db.9620061.hostedresource.com",
        "user" => "cargo12345",
        "pass" => "Cargo123!"
        );

$mysql = mysql_connect($databaseConfig["server"],$databaseConfig["user"],$databaseConfig["pass"]) or die("DB CONNECTION ERROR.");
mysql_select_db($databaseConfig["db"], $mysql) or die("SELECT DATABASE ERROR.") or die(mysql_error());