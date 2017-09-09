<?php
require __DIR__ . '/vendor/autoload.php';

$chaincoin = new ChainCoin();
$info = $chaincoin->callMethod('masternode', array(0 => 'count' ));

if ($chaincoin->getError() == NULL)
  echo "There are " . $info . " masternodes running";
else
  echo $chaincoin->getError();
