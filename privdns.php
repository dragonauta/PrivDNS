<html><head><title>DNS</title></head><body>
<?php
//TODO:
// set user, password and table as VARIABLES

// connect to mysql
$enlace =  mysql_connect('localhost', '', '');
if (!$enlace) {
    die('Can't connect: ' . mysql_error());
}
mysql_select_db('') or die('Could not select database.');

// tomar ip remota y hash
$remoteip = $_SERVER[REMOTE_ADDR];
$keydns = $_GET[keydns];

// update
$query_update = "UPDATE `dns` SET `ip`='$remoteip' WHERE `hash`='$keydns'";
mysql_query($query_update) or die (mysql_error());

// fin conexion
mysql_close($enlace);
?>
</body></html>
