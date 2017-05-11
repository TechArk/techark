#!/usr/bin/env php
<?php require_once __DIR__ . '/vendor/autoload.php';

use Xtuple\Drupal7\Application\Console\DrupalConsoleApplication;

try {
  $appDirectory = getcwd();
  $console = new DrupalConsoleApplication($appDirectory, "$appDirectory/drupal/core");
  $console->run();
}
catch (\Exception $e) {
  echo strtr("Error: {message}\n", [
    '{message}' => $e->getMessage(),
  ]);
  exit();
}
