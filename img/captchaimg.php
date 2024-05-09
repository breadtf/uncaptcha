<?php

session_start();

if (mt_rand(0, 100) != 69){
    $words = json_decode(file_get_contents("https://random-word.ryanrk.com/api/en/word/random/2?minlength=5&maxlength=8"), true);
} else {
    $words = ["dont", "type"];
}
// Create a new Imagick object
$image = new Imagick();

// Set the image dimensions
$image->newImage(302, 59, new ImagickPixel('white'));

// Set the font properties
$draw = new ImagickDraw();
// $draw->setFont('Arial');
$draw->setTextAntialias(false);
$draw->setFontSize(24);
$draw->setFillColor('black');

// Add text to the image
$text = $words[0] . "       " . $words[1];
$image->annotateImage($draw, 25, 25, 0, $text);

$image->waveImage(mt_rand(12, 18), mt_rand(140, 260));
$image->waveImage(mt_rand(11, 16), mt_rand(110, 220));

$image->scaleImage(302, 59, false);

$image->blurImage(0.5,0.5);
$image->sharpenimage(2, 65535, 1);



// Set the image format
$image->setImageFormat("png");

$_SESSION["captchaAnswer"] = implode(" ", $words);

// Output the image
header("Content-Type: image/png");
echo $image;
?>