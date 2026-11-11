<?php

require_once('CarCouponGenerator.php');
class CouponGenerator {

    public function __construct(private CarCouponGenerator $carGenerator)
    {}
    function cupounGenerator() {
           $discount = 0;
           $isHighSeason = false;
           $bigStock = true;

           $discount =+ $this->carGenerator->addSeasonDiscount($isHighSeason);
           $discount =+ $this->carGenerator->addStockDiscount($bigStock);
           return $cupoun = "Get {$discount}% off the price of your new car.";
    }
}

?>
