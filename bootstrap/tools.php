<?php

/*
|--------------------------------------------------------------------------
| Tools Bootstrap
|--------------------------------------------------------------------------
|
| Entry point of command line tools under the "tools" directory.
|
*/

chdir(__DIR__);

# PHP decimal precision
ini_set('precision', 16);

# Basic definitions
require_once './definitions.php';

# Autoload
require_once VENDOR_DIR . '/autoload.php';

# Configurations
require_once CONFIG_DIR . '/env.php';
require_once CONFIG_DIR . '/log.php';

# Framework tools
require_once BOOTSTRAP_DIR . '/framework.php';
