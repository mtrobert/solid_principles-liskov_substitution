<?php namespace App\src;


class AviVideoPlayer extends VideoPlayer
{
  public function play($file)
  {
    // if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi')  // Preconditions are greater than in the base class,
    // {                                                   //therefore it violates Liskov Substitution Principal
    //   throw new Exception;                              //
    // }
    var_dump("playing video")
  }
}
