<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use Atmospherephp\Framework\Http\HttpKernel;
use Atmospherephp\Framework\Foundation\Application;

$application = new Application(
    kernel: new HttpKernel(),
);

$application->run();