<?php

session_id('e1of9069k9o1f3haos831m4rba');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>