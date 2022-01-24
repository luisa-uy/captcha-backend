<?php 
header('Content-type: application/json; charset=utf-8');
#echo strval($_GET["id1"])."\n";
#echo strval($_GET["txt1"])."\n";
#echo strval($_GET["id2"])."\n";
#echo strval($_GET["txt2"])."\n";
?>{"error": <?php if ($_GET["txt1"]==1){echo "0";}else{echo "1";}?>}