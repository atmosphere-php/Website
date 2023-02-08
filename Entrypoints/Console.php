<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use Atmospherephp\Framework\Console\ConsoleKernel;
use Atmospherephp\Framework\Foundation\Application;

$application = new Application(
    kernel: new ConsoleKernel(),
);
