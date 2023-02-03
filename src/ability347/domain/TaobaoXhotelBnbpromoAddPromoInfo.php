<?php
namespace Topsdk\Topapi\Ability347\Domain;

class TaobaoXhotelBnbpromoAddPromoInfo {

    /**
        今夜特惠
     **/
    public $tonight_discount;

    /**
        连住优惠
     **/
    public $long_order_info;

    /**
        早定优惠
     **/
    public $early_booking_info;

    /**
        天天特惠
     **/
    public $daily_booking_info;


    public function getTonightDiscount() : TaobaoXhotelBnbpromoAddTonightDiscount{
        return $this->tonight_discount;
    }

    public function setTonightDiscount(TaobaoXhotelBnbpromoAddTonightDiscount $tonightDiscount){
        $this->tonight_discount = $tonightDiscount;
    }

    public function getLongOrderInfo() : TaobaoXhotelBnbpromoAddLongOrderInfo{
        return $this->long_order_info;
    }

    public function setLongOrderInfo(TaobaoXhotelBnbpromoAddLongOrderInfo $longOrderInfo){
        $this->long_order_info = $longOrderInfo;
    }

    public function getEarlyBookingInfo() : TaobaoXhotelBnbpromoAddEarlyBookingInfo{
        return $this->early_booking_info;
    }

    public function setEarlyBookingInfo(TaobaoXhotelBnbpromoAddEarlyBookingInfo $earlyBookingInfo){
        $this->early_booking_info = $earlyBookingInfo;
    }

    public function getDailyBookingInfo() : TaobaoXhotelBnbpromoAddDailyBookingInfo{
        return $this->daily_booking_info;
    }

    public function setDailyBookingInfo(TaobaoXhotelBnbpromoAddDailyBookingInfo $dailyBookingInfo){
        $this->daily_booking_info = $dailyBookingInfo;
    }


}

