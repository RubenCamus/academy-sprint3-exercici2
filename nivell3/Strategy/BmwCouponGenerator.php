<?php

require_once('CarCouponGenerator.php');

class BmwCouponGenerator implements CarCouponGenerator {
    public function addSeasonDiscount(bool$isHighSeason):int
    {
        if(!$isHighSeason) {return 5;}
        return 0;
    }
    public function addStockDiscount(bool $bigStock):int
    {
        if($bigStock) {return 7;}
        return 0;
    }
}
?>
