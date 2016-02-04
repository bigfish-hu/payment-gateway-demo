<?php

$content = base64_decode($this->controller->data->xml->pdf);
$length = strlen($content);

header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename=' . $this->controller->data->xml->szamlaszam . '.pdf');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . $length);
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Expires: 0');
header('Pragma: public');

echo $content;
exit;
