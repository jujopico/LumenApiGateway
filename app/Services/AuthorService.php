<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService {
  use ConsumesExternalService;

  /* 
  * the base uri to consume the authors service;
  * @var string
  */
  public $baseUri;

  public function __construct()
  {
    $this->baseUri = config('service.authors.base_uri');
  }

}