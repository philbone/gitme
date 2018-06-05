<?php

use Gitme\Gitme;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "vendor/autoload.php";

// Gitme and report!
$gitme = Gitme::getInstance();

$gitCommand = $gitme->status();

$gitCommand->setOptions("");// optional parameters.
$gitCommand->setOutputFormat($gitme::OUTPUT_FORMAT_DEFAULT);// format output

$result = $gitCommand->execute();// execute the command

print_r($result);// response should be printed in the format specified.
echo "\n";
