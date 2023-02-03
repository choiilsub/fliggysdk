<?php
namespace Topsdk\Topapi\Ability362\Domain;

class AlitripTravelHotelticketProductProductupdateProductUpdateDTO {

    /**
        扩展参数
     **/
    public $extend_params;

    /**
        产品变更通知类型 1：价格，2：库存，3：价库
     **/
    public $notify_type;

    /**
        系统商商品码
     **/
    public $product_id;

    /**
        场次ID信息
     **/
    public $session_ids;

    /**
        产品变更开始时间 yyyy-MM-dd
     **/
    public $start_date;

    /**
        产品变更结束时间 yyyy-MM-dd
     **/
    public $end_date;


    public function getExtendParams() : string{
        return $this->extend_params;
    }

    public function setExtendParams(string $extendParams){
        $this->extend_params = $extendParams;
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

    public function getSessionIds() : array{
        return $this->session_ids;
    }

    public function setSessionIds(array $sessionIds){
        $this->session_ids = $sessionIds;
    }

    public function getStartDate() : string{
        return $this->start_date;
    }

    public function setStartDate(string $startDate){
        $this->start_date = $startDate;
    }

    public function getEndDate() : string{
        return $this->end_date;
    }

    public function setEndDate(string $endDate){
        $this->end_date = $endDate;
    }


}

