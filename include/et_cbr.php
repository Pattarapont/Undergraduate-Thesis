<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_et_cbr = "localhost";
$database_et_cbr = "et_cbr";
$username_et_cbr = "root";
$password_et_cbr = "";
$et_cbr          = mysql_pconnect($hostname_et_cbr, $username_et_cbr, $password_et_cbr, $database_et_cbr) or trigger_error(mysql_error(), E_USER_ERROR);
?>