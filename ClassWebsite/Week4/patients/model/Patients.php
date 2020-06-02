<?php

$ini = parse_ini_file(_DIR_.'/.dbconfig.ini');

$bd = new PDO( "mysql:host=" . $ini['servername'].
                ";port=" . $ini['port'] .
                ";dbname=" .$ini['dbname'],
                $ini['username'],
                $ini['password']);

                
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
