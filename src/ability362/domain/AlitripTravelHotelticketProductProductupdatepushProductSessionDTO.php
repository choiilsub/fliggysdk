<?php
namespace Topsdk\Topapi\Ability362\Domain;

class AlitripTravelHotelticketProductProductupdatepushProductSessionDTO {

    /**
        开始时间。HH:mm
     **/
    public $start_time;

    /**
        场次ID
     **/
    public $session_id;

    /**
        结束时间。HH:mm
     **/
    public $end_time;

    /**
        场次库存
     **/
    public $stock;

    /**
        产品场次结算单价。单位：分
     **/
    public $wholesale_price;

    /**
        产品场次销售单价。单位：分
     **/
    public $retail_price;


    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getSessionId() : string{
        return $this->session_id;
    }

    public function setSessionId(string $sessionId){
        $this->session_id = $sessionId;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getStock() : int{
        return $this->stock;
    }

    public function setStock(int $stock){
        $this->stock = $stock;
    }

    public function getWholesalePrice() : int{
        return $this->wholesale_price;
    }

    public function setWholesalePrice(int $wholesalePrice){
        $this->wholesale_price = $wholesalePrice;
    }

    public function getRetailPrice() : int{
        return $this->retail_price;
    }

    public function setRetailPrice(int $retailPrice){
        $this->retail_price = $retailPrice;
    }


}

