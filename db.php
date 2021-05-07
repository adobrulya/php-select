<?php

    $mysql = @new Mysqli('localhost', 'root', '', 'php_select');
    if ($mysql->connect_error) exit('Error to conection from DataBase');

$mysql->set_charset('utf8');

?>