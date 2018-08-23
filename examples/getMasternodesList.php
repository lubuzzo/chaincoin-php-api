<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$chaincoin = new Chaincoin();
$list = $chaincoin->callMethod('masternodelist',
  array(0 => 'addr')
);

if ($chaincoin->getError() == NULL) {
  foreach ($list as $key => $value)
    echo $value . "<br />";
}
else
  echo $chaincoin->getError();
