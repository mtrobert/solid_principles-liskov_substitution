<?php

use App\src\{FileCarRepository, DbCarRepository, CarRepositoryInterface};

$carRepo = new DBCarRepository();
var_dump($carRepo->getAll());
