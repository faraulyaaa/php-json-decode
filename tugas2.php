<?php

$jsonData = '{"film":"Come and See","tahun":1985,"genre":"War"}';

$filmObj = json_decode($jsonData);

$filmArr = json_decode($jsonData, true);

echo "<b>PHP Object</b><br>";
echo "Film  : " . $filmObj->film . "<br>";
echo "Tahun : " . $filmObj->tahun . "<br>";
echo "Genre : " . $filmObj->genre . "<br><br>";

echo "<b>PHP Array</b><br>";
echo "Film  : " . $filmArr["film"] . "<br>";
echo "Tahun : " . $filmArr["tahun"] . "<br>";
echo "Genre : " . $filmArr["genre"] . "<br>";
?>
