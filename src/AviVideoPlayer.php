<?php namespace App\src;


class AviVideoPlayer extends VideoPlayer
{
  public function play($file)
  {
    // if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi')
    // {
    //   throw new Exception;
    // }

    // Preconditions in this class are greater than in the base class,
    //therefore it violates Liskov Substitution Principal
    // if statement commented out for demonstration purposes only
    var_dump("playing video");
  }
}
