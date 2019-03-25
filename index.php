<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'vendor/autoload.php';


$output = \calculateHomeWorkSum(3, 2.2, '1');

echo "calculateHomeWorkSum: $output <br>" ;

$output = Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1');

echo "calculateHomeWorkSum: $output <br>" ;

$output = Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1');

echo "calculateHomeWorkSum: $output <br>" ;

$output = Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');

echo "calculateHomeWorkSum: $output" ;

?>
