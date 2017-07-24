<?php 
$requestType = $_SERVER['REQUEST_METHOD']; 
$query = $_SERVER['QUERY_STRING']; 
$filename = explode('=',$query)[1]; 
switch($requestType) { 
case 'HEAD': 
header('Filesize: '.filesize($filename)); 
break; 
case 'GET': 
readfile($filename); 
break; 
case 'POST': 
file_put_contents($filename, file_get_contents('php://input')); 
break; 
case 'DELETE': 
unlink($filename); 
break; 
case 'PATCH': 
$fp = fopen($filename, 'a'); 
fwrite ($fp, file_get_contents('php://input')); 
fclose($fp); 
break; 
} 
?>