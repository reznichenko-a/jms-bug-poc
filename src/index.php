<?php

declare(strict_types=1);

namespace Reznichenko\PocJmsBug;

require __DIR__ . '/../vendor/autoload.php';

use JMS\Serializer\SerializerBuilder;

$version = PHP_VERSION;

$json = sprintf('{"name":"Joe Peach","age":29,"array":{"1":"PHP code tester Sandbox Online","Random number":188,"PHP Version":"%s"}}', $version);

$serializer = (new SerializerBuilder())->build();

$test = $serializer->deserialize($json, Test::class, 'json');

var_dump($test);
