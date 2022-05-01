<?php

chdir(__DIR__);
require_once '../bootstrap/cli.php';

use App\Models\SQLiteTestModel;

$option = getopt('', ['id:']);

$processId = $option['id'];

for ($i = 0; $i < 5; $i++)
{
    $sql = "INSERT INTO `Goo` (`ID`, `Process`, `Time`) VALUES (:id0, :process0, :time0), (:id1, :process1, :time1), (:id2, :process2, :time2)";
    $bind = [
        'id0' => uniqid(true),
        'process0' => $processId,
        'time0' => MsTime(),
        'id1' => uniqid(true),
        'process1' => $processId,
        'time1' => MsTime(),
        'id2' => uniqid(true),
        'process2' => $processId,
        'time2' => MsTime()
    ];
    $result = SQLiteTestModel::getInstance()->query($sql, $bind);

    sleep(2);
}
