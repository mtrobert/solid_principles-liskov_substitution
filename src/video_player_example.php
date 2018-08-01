<?php


 use App\src\{AviVideoPlayer, VideoPlayer};

function play($obj,$videoFile){
  $obj->play($videoFile);
}
$videoFile = 'ShawshankRedemption.avi';

// $videoPlayer = new VideoPlayer(); //commented out for demo purposes only
$videoPlayer = new AviVideoPlayer();


play($videoPlayer,$videoFile);
