<?php
// Datei und Faktor der Größenänderung

$filename = $tmpName, __DIR__ . '//bilder/'. uniqid('', true) .'.jpg';
$percent = 0.5;

// Typ der Ausgabe
header('Content-Type: image/jpeg');

// Neue Größe berechnen
list($width, $height) = getimagesize($filename);
$newwidth = $width * $percent;
$newheight = $height * $percent;

// Bild laden
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filename);

// Skalieren
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Ausgabe
imagejpeg($thumb);
?>