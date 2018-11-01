<?php

namespace App\RefactorBigMethod;

use defaults;
use environment;

include 'vendor/autoload.php';

// In some environment setting class
defaults::$clientInfo = [
    'id' => 1,
    'name' => 'Bob',
];

// I am doing something.
// Now I need to use some really long method.
$environment = new environment();

// pretend this is some script.
$originalReallyLongMethod = new OriginalReallyLongMethod();
echo $originalReallyLongMethod->someReallyLongMethod('one', 'bar', false);

echo "\n    >> going to other places in the app\n";

// this is another script calling it.
$originalReallyLongMethod = new OriginalReallyLongMethod();
echo $originalReallyLongMethod->someReallyLongMethod('foo', 'bar');

echo "\n    >> going to other places in the app\n";

// this is yet another script calling this method.
$someCheckToUseNewRequirement = false;
if ($someCheckToUseNewRequirement) {
    $reallyLongMethod = new BetterDesign(defaults::$clientInfo['id']);
} else {
    $reallyLongMethod = new OriginalReallyLongMethod();
}
echo $reallyLongMethod->someReallyLongMethod('foo', 'bar', false);

echo "\n    >> some accounts will get the above feature, others the below\n";

// this is yet another script calling this method.
$someCheckToUseNewRequirement = true;
if ($someCheckToUseNewRequirement) {
    $reallyLongMethod = new BetterDesign(defaults::$clientInfo['id']);
} else {
    $reallyLongMethod = new OriginalReallyLongMethod();
}
echo $reallyLongMethod->someReallyLongMethod('foo', 'bar', false);
echo "\n    >> done.";
