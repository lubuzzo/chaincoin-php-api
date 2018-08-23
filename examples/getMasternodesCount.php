<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$chaincoin = new Chaincoin();
$enabled = $chaincoin->callMethod(
  'masternode',
  array(
    0 => 'count',
    1 => 'enabled'
  )
);

$total = $chaincoin->callMethod(
  'masternode',
  array(
    0 => 'count',
    1 => 'total'
  )
);

if ($chaincoin->getError() == NULL)
  echo "There are " . $enabled . "/" . $total . " masternodes running";
else
  echo $chaincoin->getError();
