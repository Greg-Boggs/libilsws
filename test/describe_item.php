<?php

require_once 'vendor/autoload.php';

// Initialize
$ilsws = new Libilsws\Libilsws("./libilsws.yaml");

// Connect and get token
$token = $ilsws->connect();

// Describe item record
$response = $ilsws->describe_item($token);
print json_encode($response, JSON_PRETTY_PRINT) . "\n";

// EOF
