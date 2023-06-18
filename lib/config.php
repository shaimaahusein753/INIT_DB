<?php

$ini = @parse_ini_file(".env");

// if($ini && isset($ini["DB_URL"])){
    //load local .env file
    $url = 'mysql://b5094cb1c17552:e6694769@us-cdbr-east-06.cleardb.net/heroku_6a58510f6a72749?reconnect=true';
    $db_url = parse_url($url);
// }
// else{
//     //load from heroku env variables
//     $url = getenv("DB_URL");
//     $db_url = parse_url($url);
    
// }
//attempts to handle a failure where parse_url doesn't parse properly (usually happens when special characters are included)
if (!$db_url || count($db_url) === 0) {
    $matches;
    $pattern = "/mysql:\/\/(\w+):(\w+)@([^:]+):(\d+)\/(\w+)/i";
    preg_match($pattern, $url, $matches);
    $db_url["host"] = $matches[3];
    $db_url["user"] = $matches[1];
    $db_url["pass"] = $matches[2];
    $db_url["path"] = "/" . $matches[5];
}
$dbhost   = $db_url["host"];
$dbuser = $db_url["user"];
$dbpass = $db_url["pass"];
$dbdatabase       = substr($db_url["path"],1);
?>
