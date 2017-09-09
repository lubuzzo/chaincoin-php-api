<?php
require '../ChainCoin.php';
require '../settings.php';

$chaincoin = new ChainCoin($settings['user'], $settings['pass'], $settings['host'], $settings['port']);
$info = $chaincoin->callMethod('masternode', array(0 => 'count' ));

if ($chaincoin->getError() == NULL)
  echo "There are " . $info . " masternodes running";
else
  echo $chaincoin->getError();
