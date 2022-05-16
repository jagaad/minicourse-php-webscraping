<?php

require_once __DIR__ . '/web-scraping-function.php';

$rfcList = getPhpRfcUnderDiscussionInfo();

$tableContent = '';

/** @var RfcInfo */
foreach ($rfcList as $rfcInfo) {
    $tableContent .= <<<HTML
    <tr>
      <th><a href="$rfcInfo->url" target="_blank">$rfcInfo->title</a></th>
      <td>$rfcInfo->date</td>
      <td>$rfcInfo->author</td>
      <td>$rfcInfo->targetVersion</td>
    </tr>
    HTML;
}

$html = <<<HTML
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
    <h1>RFCs - PHP Web Scraping</h1>
    <hr />
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Date</th>
            <th scope="col">Author</th>
            <th scope="col">Targe Version</th>
            </tr>
        </thead>
        <tbody>
        $tableContent
        </tbody>
    </table>
</div>
HTML;

file_put_contents('rfcs.html', $html);

echo 'HTML file generation complete!';
