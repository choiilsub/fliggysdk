<?php
namespace Topsdk\Topapi\Ability362\Domain;

class AlitripTravelHotelticketProductProductupdatepushProductUpdatePushDTO {

    /**
        日历价格库存信息  日历价格库存信息
     **/
    public $price_stocks;

    /**
        产品变更通知类型 1：价格，2：库存，3：价库
     **/
    public $notify_type;

    /**
        系统商商品码
     **/
    public $product_id;

    /**
        床型ID
     **/
    public $bed_id;

    /**
        酒店ID
     **/
    public $hotel_id;

    /**
        房型ID
     **/
    public $room_id;

    /**
        扩展参数
     **/
    public $extend_params;

    /**
        模式 默认值1；1:普通日历/预约商品（非通兑和非任选）
     **/
    public $mode;


    public function getPriceStocks() : array{
        return $this->price_stocks;
    }

    public function setPriceStocks(array $priceStocks){
        $this->price_stocks = $priceStocks;
    }

    public function getNotifyType() : int{
        return $this->notify_type;
    }

    public function setNotifyType(int $notifyType){
        $this->notify_type = $notifyType;
    }

    public function getProductId() : string{
        return $this->product_id;
    }

    public function setProductId(string $productId){
        $this->product_id = $productId;
    }

    public function getBedId() : string{
        return $this->bed_id;
    }

    public function setBedId(string $bedId){
        $this->bed_id = $bedId;
    }

    public function getHotelId() : string{
        return $this->hotel_id;
    }

    public function setHotelId(string $hotelId){
        $this->hotel_id = $hotelId;
    }

    public function getRoomId() : string{
        return $this->room_id;
    }

    public function setRoomId(string $roomId){
        $this->room_id = $roomId;
    }

    public function getExtendParams() : string{
        return $this->extend_params;
    }

    public function setExtendParams(string $extendParams){
        $this->extend_params = $extendParams;
    }

    public function getMode() : int{
        return $this->mode;
    }

    public function setMode(int $mode){
        $this->mode = $mode;
    }


}

