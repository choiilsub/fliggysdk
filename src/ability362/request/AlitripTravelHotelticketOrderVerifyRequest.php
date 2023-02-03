<?php
namespace Topsdk\Topapi\Ability362\Request;
use Topsdk\Topapi\TopUtil;

class AlitripTravelHotelticketOrderVerifyRequest {

    /**
        扩展参数
     **/
    private $extendParams;

    /**
        系统商订单号
     **/
    private $orderId;

    /**
        凭证信息
     **/
    private $vouchers;

    /**
        飞猪订单号
     **/
    private $fliggyOrderId;


    public function getExtendParams() : string{
        return $this->extendParams;
    }

    public function setExtendParams(string $extendParams){
        $this->extendParams = $extendParams;
    }

    public function getOrderId() : string{
        return $this->orderId;
    }

    public function setOrderId(string $orderId){
        $this->orderId = $orderId;
    }

    public function getVouchers() : array{
        return $this->vouchers;
    }

    public function setVouchers(array $vouchers){
        $this->vouchers = $vouchers;
    }

    public function getFliggyOrderId() : string{
        return $this->fliggyOrderId;
    }

    public function setFliggyOrderId(string $fliggyOrderId){
        $this->fliggyOrderId = $fliggyOrderId;
    }


    public function getApiName() : string {
        return "alitrip.travel.hotelticket.order.verify";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->extendParams)) {
            $requestParam["extend_params"] = TopUtil::convertBasic($this->extendParams);
        }

        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        if (!TopUtil::checkEmpty($this->vouchers)) {
            $requestParam["vouchers"] = TopUtil::convertStructList($this->vouchers);
        }

        if (!TopUtil::checkEmpty($this->fliggyOrderId)) {
            $requestParam["fliggy_order_id"] = TopUtil::convertBasic($this->fliggyOrderId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

