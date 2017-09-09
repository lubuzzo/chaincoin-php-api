<?php
require '../ChainCoin.php';

$chaincoin = new ChainCoin();
$info = $chaincoin->callMethod('masternodelist');

if ($chaincoin->getError() == NULL) {
  foreach ($info as $key => $value) {
    echo $key . " -> " . $value . "<br />";
  }
}
else
  echo $chaincoin->getError();
