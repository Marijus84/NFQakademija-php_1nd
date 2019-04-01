<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'vendor/autoload.php';


$output = \calculateHomeWorkSum(3, 2.2, '1');

echo "Funkcijos calculateHomeWorkSum(...\$numbers); iš root namespace rezultatas: <br> $output <br>" ;

$output = Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1');

echo "Funkcijos calculateHomeWorkSum(...\$numbers): int; iš Nfq\Akademija\Not_Typed namespace rezultatas: <br> $output <br>" ;

$output = Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1');

echo "Funkcijos calculateHomeWorkSum(int...\$numbers): int; iš Nfq\Akademija\Soft namespace rezultatas: <br>  $output <br>" ;

$output = Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');

echo "Funkcijos calculateHomeWorkSum(int...\$numbers): int; iš Nfq\Akademija\Strict namespace su declare(strict_types=1) direktyva rezultatas: <br>  $output <br>" ;

?>
