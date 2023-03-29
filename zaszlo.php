<?php

header('content-type: image/png');
$w = 500;
$img = imagecreatetruecolor($w, $w);

// Stores the colors
$red = imagecolorallocate($img, 255, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
$green = imagecolorallocate($img, 0, 255, 0);
$grey = imagecolorallocate($img, 80, 80, 80);

// Background
imagefill($img, 0, 0, $grey);

// Left side
imagefilledellipse($img, 210, 240, 80, 50, $red);
imagefilledellipse($img, 210, 250, 80, 50, $white);
imagefilledellipse($img, 210, 260, 80, 50, $green);
imagefilledellipse($img, 210, 270, 80, 50, $grey);

// Right side
imagefilledellipse($img, 290, 260, 80, 50, $green);
imagefilledellipse($img, 290, 250, 80, 50, $white);
imagefilledellipse($img, 290, 240, 80, 50, $red);
imagefilledellipse($img, 290, 230, 80, 50, $grey);

imagepng($img);
imagedestroy($img);

?>