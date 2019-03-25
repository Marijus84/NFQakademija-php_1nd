<?php

declare(strict_types=1);

namespace Nfq\Akademija\Strict {

  function calculateHomeWorkSum( ...$numbers):int {
    $total = helperToCheckStrict(...$numbers);
    return $total;
  }

  function helperToCheckStrict(int ...$numbers):int {
    $total = 0;
    foreach ($numbers as $number) {
      $total += $number;
    }
    return $total;
  }

}


 ?>
