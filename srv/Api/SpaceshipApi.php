<?php

namespace Api;

class SpaceshipApi
{
  protected const URL_BASE = 'http://localhost:3000/spaceships';

  public function allSpaceships()
  {
    $url = self::URL_BASE;
    $data = $this->sendRequest($url);
    return (json_decode($data, true));
  }

  public function oneSpaceship(string $id)
  {
    die(var_dump($id));
    $url = self::URL_BASE . "/$id";
    $data = $this->sendRequest($url);
    return (json_decode($data, true));
  }

  protected function sendRequest(string $url, string $type = null, string $body = null)
  {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
  }
}
