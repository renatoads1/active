<?php
//phpinfo();

$host='127.0.0.1';
$user='SA';
$database='usuarios';
$pass='r3n4t0321';

$connection_string = 'DRIVER={SQL Server};SERVER=PROGAMACAO\SQLEXPRESS;DATABASE=usuarios';

$user = 'SA';
$pass = 'r3n4t0321';

$connection = odbc_connect( $connection_string, $user, $pass ) or die('erro'); 

if($connection >0)
{
    $sql = "SELECT * FROM usuarios";
    $result = odbc_exec($connection,$sql);
    while ($resp = odbc_fetch_object($result)){
        echo($resp->usuario.":".$resp->senha."<br><hr>");
    }
    
}
else
{
    echo "Não conectou.";
}


?>