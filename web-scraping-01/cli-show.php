<?php

require_once __DIR__ . '/web-scraping-function.php';

$rfcList = getPhpRfcUnderDiscussionInfo();

/** @var RfcInfo */
foreach ($rfcList as $rfcInfo) {
    echo <<<OUTPUT
    Title: $rfcInfo->title
    Date: $rfcInfo->date
    Author: $rfcInfo->author
    Target Version: $rfcInfo->targetVersion
    Url: $rfcInfo->url
    -----------------------------------------\n\n
    OUTPUT;
}
