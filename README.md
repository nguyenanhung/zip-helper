[![Latest Stable Version](https://img.shields.io/packagist/v/nguyenanhung/zip-helper.svg?style=flat-square)](https://packagist.org/packages/nguyenanhung/zip-helper)
[![Total Downloads](https://img.shields.io/packagist/dt/nguyenanhung/zip-helper.svg?style=flat-square)](https://packagist.org/packages/nguyenanhung/zip-helper)
[![Daily Downloads](https://img.shields.io/packagist/dd/nguyenanhung/zip-helper.svg?style=flat-square)](https://packagist.org/packages/nguyenanhung/zip-helper)
[![Monthly Downloads](https://img.shields.io/packagist/dm/nguyenanhung/zip-helper.svg?style=flat-square)](https://packagist.org/packages/nguyenanhung/zip-helper)
[![License](https://img.shields.io/packagist/l/nguyenanhung/zip-helper.svg?style=flat-square)](https://packagist.org/packages/nguyenanhung/zip-helper)
[![PHP Version Require](https://img.shields.io/packagist/dependency-v/nguyenanhung/zip-helper/php)](https://packagist.org/packages/nguyenanhung/zip-helper)

# Zip Helper

PHP Zip Helper - Basic, Simple and Lightweight

## Version

- [x] V1.x support all PHP version `>=5.6`
- [x] V2.x support all PHP version `>=7.0`

## How to use

### Setup helper

Install helper with Composer

```shell
composer require nguyenanhung/zip-helper
```

### Code

You can write your app, and see example code same bellow

```php
<?php

use nguyenanhung\Libraries\Zip\Zip;

require_once __DIR__ . '/vendor/autoload.php';

$fileTest = __DIR__ . '/tmp/test-file.zip';

$zip = new Zip();
$zip->setFilename($fileTest);
$zip->setDataList(
    array(
        __DIR__ . '/docs', // Your Path
        __DIR__ . '/docs/README.md' // Your file
    )
);

// Compress with ZIP
$result = $zip->zip(); // Add all data in $dataList to $filename

d($result);
d(directory_map(__DIR__ . '/tmp'));

// Extract Zip file
$zip->setExtractFolder(__DIR__ . '/tmp'); 
$extract = $zip->unzip();
d($extract);
d(directory_map(__DIR__ . '/tmp'));

```

## Contact & Support

If any question & request, please contact following information

| Name        | Email                | Skype            | Facebook      |
| ----------- | -------------------- | ---------------- | ------------- |
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | @nguyenanhung |

From Vietnam with Love <3
