<?php

interface CarCouponGenerator {
    public function addSeasonDiscount(bool $isHighSeason):int;
    public function addStockDiscount(bool $bigStock):int;
}

?>
