<?php namespace App\src;

/**
*Fetch all records
*
* @return array
*/
interface CarRepositoryInterface
{
  public function getAll() : array;
}
