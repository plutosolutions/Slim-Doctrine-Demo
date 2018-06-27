<?php

declare(strict_types=1);

use Slim\App;
use Slim\Container;

putenv('XHGUI_PROFILING=oyea');
require_once __DIR__ . '/../vendor/perftools/xhgui-collector/external/header.php';

/** @var Container $cnt */
$cnt = require_once __DIR__ . '/../bootstrap.php';

/** @var App $app */
$app = $cnt[App::class];
$app->run();
