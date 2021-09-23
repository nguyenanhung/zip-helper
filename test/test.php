<?php

use nguyenanhung\Libraries\Zip\Zip;

require_once __DIR__ . '/../vendor/autoload.php';

$zip = new Zip();
$zip->setFilename(__DIR__ . '/../tmp/test-file.zip');
$zip->setDataList(
    array(
        __DIR__ . '/../docs'
    )
);

$result = $zip->zip();

d($result);
d(directory_map(__DIR__ . '/../tmp'));
