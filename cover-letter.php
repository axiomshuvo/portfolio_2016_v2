<?php

$file = __DIR__ . "/file/Pradipta_Sarker_Cover_Letter_.pdf";
$downloadName = "Pradipta_Sarker_Cover_Letter.pdf";

if (!is_file($file)) {
    http_response_code(404);
    exit("Cover letter file not found.");
}

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $downloadName . '"; filename*=UTF-8\'\'' . rawurlencode($downloadName));
header('Content-Length: ' . filesize($file));
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

readfile($file);
exit;
