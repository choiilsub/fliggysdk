<?php
namespace Topsdk\Topapi\Ability362\Domain;

class AlitripTravelHotelticketProductProductupdatepushProductPriceStockDTO {

    /**
        日期。yyyy-MM-dd
     **/
    public $date;

    /**
        场次价库信息
     **/
    public $sessions;

    /**
        是否可售卖；true：可售卖
     **/
    public $can_sell;

    /**
        库存
     **/
    public $stock;

    /**
        产品结算单价。单位：分
     **/
    public $wholesale_price;

    /**
        产品销售单价。单位：分
     **/
    public $retail_price;


    public function getDate() : string{
        return $this->date;
    }

    public function setDate(string $date){
        $this->date = $date;
    }

    public function getSessions() : array{
        return $this->sessions;
    }

    public function setSessions(array $sessions){
        $this->sessions = $sessions;
    }

    public function getCanSell() : bool{
        return $this->can_sell;
    }

    public function setCanSell(bool $canSell){
        $this->can_sell = $canSell;
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

