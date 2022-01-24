<?php 
header('Content-type: application/json; charset=utf-8');
$imageData1 = base64_encode(file_get_contents("captcha1.png"));
$imageData2 = base64_encode(file_get_contents("captcha2.png"));
$results = array(
  'img1' => base64_encode($imageData1),
  'img2' => base64_encode($imageData2),
  'id1' => '1',
  'id2' => '2'
);
$json = json_encode($results);
echo $json;
?>