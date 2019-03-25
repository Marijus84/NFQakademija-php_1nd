<?php


namespace {
  
  function calculateHomeWorkSum(...$numbers){
    $total = 0;
    foreach ($numbers as $number) {
      $total += $number;
    }
    return $total;
  }

}



namespace Nfq\Akademija\Not_Typed {

  function calculateHomeWorkSum(...$numbers):int {
    $total = 0;
    foreach ($numbers as $number) {
      $total += $number;
    }
    return $total;
  }

}



namespace Nfq\Akademija\Soft {

  function calculateHomeWorkSum(int ...$numbers):int {
    $total = 0;
    foreach ($numbers as $number) {
      $total += $number;
    }
    return $total;
  }

}



?>
