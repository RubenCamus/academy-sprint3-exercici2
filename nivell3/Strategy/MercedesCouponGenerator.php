<?php
require_once('CarCouponGenerator.php');

class MercedesCouponGenerator implements CarCouponGenerator {
    public function addSeasonDiscount(bool$isHighSeason):int
    {
        if(!$isHighSeason) {return 4;}
        return 0;
    }
    public function addStockDiscount(bool $bigStock):int
    {
        if($bigStock) {return 10;}
        return 0;
    }
}
?>
