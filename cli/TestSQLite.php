<?php

chdir(__DIR__);
require_once '../bootstrap/cli.php';

$whichPHP = trim(shell_exec('which php'));
$singleProcess = BASE_DIR . '/cli/TestSQLiteSingleProcess.php';

exec("{$whichPHP} {$singleProcess} --id=1 > /dev/null &");
exec("{$whichPHP} {$singleProcess} --id=2 > /dev/null &");
