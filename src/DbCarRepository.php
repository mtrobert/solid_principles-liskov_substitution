<?php namespace App\src;

use \stdClass;
class DbCarRepository implements CarRepositoryInterface
{
  public function getAll() :array
  {
    // return through db
    $CarRepo = new stdClass(); //represents data from db
    return (array) $CarRepo;   //return an array as specified in the interface
  }
}
