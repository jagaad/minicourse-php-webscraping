<?php

define('WIKI_URL', 'https://wiki.php.net');

$rawContent = file_get_contents(WIKI_URL . '/rfc');

$document = new DOMDocument();
@$document->loadHTML($rawContent);

$divContainingRfcTopics = $document
    ->getElementById('under_discussion')
    ->nextElementSibling;

/** @var DOMElement */
foreach ($divContainingRfcTopics->getElementsByTagName('a') as $anchorRfc) {
    $url = WIKI_URL . $anchorRfc->getAttribute('href');
    $title = $anchorRfc->textContent;

    $rawContentRfc = file_get_contents($url);

    $documentRfc = new DOMDocument();
    @$documentRfc->loadHTML($rawContentRfc);

    $xpath = new DOMXPath($documentRfc);
    $rfcTagsList = $xpath->query('//div[@class="li"]');

    $date = 'N/A';
    $author = 'N/A';
    $targetVersion = 'N/A';

    /** @var DOMElement */
    foreach ($rfcTagsList as $rfcTag) {
        $itemRow = explode(':', $rfcTag->textContent);
        if (count($itemRow) < 2) {
            continue;
        }

        $keyName = trim($itemRow[0]);
        $keyValue = trim($itemRow[1]);

        if ($keyName == 'Date') {
            $date = $keyValue;
        } elseif ($keyName == 'Author') {
            $author = $keyValue;
        } elseif ($keyName == 'Target Version') {
            $targetVersion = $keyValue;
        }
    }

    echo <<<OUTPUT
        Title: $title
        Date: $date
        Author: $author
        Target Version: $targetVersion
        -------------------------------------\n\n
    OUTPUT;
}
