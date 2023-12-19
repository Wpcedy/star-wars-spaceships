<?php

use Api\SpaceshipApi;

require(__DIR__ . '/../Api/SpaceshipApi.php');

$breedList = [];
$service = new SpaceshipApi();

$spaceshipList = $service->allSpaceships();
