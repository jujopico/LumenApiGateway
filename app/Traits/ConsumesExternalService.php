<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalService
{
  /*
  * send a request to any service
  * @return string
  */
  public function performRequest($methos, $requestUrl, $formParams = [], $headers = [])
  {
    $client = new Client([
      'base_uri' => $this->baseUri,
    ]);

    $response = $client->request($method, $requestUrl, ['form_params' => $formParams, 'headers' => $headers]);

    return $response->getBody()->getContents();
  }
}