<?php namespace App\src;

use \stdClass;
class DbCarRepository implements CarRepositoryInterface
{
  public function getAll()
  {
    // return through db
    $CarRepo = new stdClass(); //represents data from db
    return $CarRepo;
  }
}
