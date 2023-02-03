<?php
namespace Topsdk\Topapi\Ability362\Request;
use Topsdk\Topapi\TopUtil;

class AlitripTravelHotelticketProductProductupdateRequest {

    /**
        系统商分配给飞猪卖家的账号
     **/
    private $accessKey;

    /**
        变更的产品信息
     **/
    private $productUpdates;


    public function getAccessKey() : string{
        return $this->accessKey;
    }

    public function setAccessKey(string $accessKey){
        $this->accessKey = $accessKey;
    }

    public function getProductUpdates() : array{
        return $this->productUpdates;
    }

    public function setProductUpdates(array $productUpdates){
        $this->productUpdates = $productUpdates;
    }


    public function getApiName() : string {
        return "alitrip.travel.hotelticket.product.productupdate";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->accessKey)) {
            $requestParam["access_key"] = TopUtil::convertBasic($this->accessKey);
        }

        if (!TopUtil::checkEmpty($this->productUpdates)) {
            $requestParam["product_updates"] = TopUtil::convertStructList($this->productUpdates);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

