<?php

require_once 'vendor/autoload.php';

$field_list = $argv[1];
if ( ! $field_list ) {
    $field_list = '';
}

// Initialize
$ilsws = new Libilsws\Libilsws("./libilsws.yaml");

// Connect and get token
$token = $ilsws->connect();

// Describe patron register function
$bib_key = '1051686';
$response = $ilsws->get_bib($token, $bib_key, $field_list);
print json_encode($response, JSON_PRETTY_PRINT) . "\n";

// EOF
