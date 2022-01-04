<?php

  function isValid($date, $format = 'Y-m-d'){
    
      $dt = DateTime::createFromFormat($format, $date);

      return $dt && $dt-> format($format) === $date;

  }
      var_dump(isValid('2019-04-01'));
      var_dump(isValid('2021-15-31'));

?>
