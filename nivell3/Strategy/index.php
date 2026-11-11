<?php

require_once('CouponGenerator.php');
require_once('MercedesCouponGenerator.php');
require_once('BmwCouponGenerator.php');


$mercedesCouponGenerator = new CouponGenerator(new MercedesCouponGenerator());
$bmwCouponGenerator = new CouponGenerator(new BmwCouponGenerator());

echo $mercedesCouponGenerator->cupounGenerator(). PHP_EOL;
echo $bmwCouponGenerator->cupounGenerator(). PHP_EOL;
?>
