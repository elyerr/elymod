<?php

use Elymod\Runtime\Installer;

require __DIR__ . '/../vendor/autoload.php';

$projectName = basename(getcwd());

Installer::install($projectName);