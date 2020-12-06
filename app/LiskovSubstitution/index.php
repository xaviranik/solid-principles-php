<?php

require_once('../../vendor/autoload.php');

$standardPlayer = new \LSP\StandardVideoPlayer();
// Let's assume a file is feed into the standard video player
$file = '';
$standardPlayer->play($file);

// We can use any file type
$aviPlayer = new \LSP\Players\AviPlayer();
$aviPlayer->play($file);

$mpegPlayer = new \LSP\Players\MpegPlayer();
$mpegPlayer->play($file);