<?php
require '../ChainCoin.php';
require '../settings.php';

$chaincoin = new ChainCoin($settings['user'], $settings['pass'], $settings['host'], $settings['port']);
$info = $chaincoin->callMethod('masternodelist');

if ($chaincoin->getError() == NULL) {
  foreach ($info as $key => $value) {
    echo $key . " -> " . $value . "<br />";
  }
}
else
  echo $chaincoin->getError();
