<?php
namespace Topsdk\Topapi\Ability362\Request;
use Topsdk\Topapi\TopUtil;

class AlitripTravelHotelticketOrderCreateRequest {

    /**
        扩展参数 支持的key: ["hotelName" : "酒店名称", "roomName" : "房型名称", "productName" : "产品名称",  "desc" : "描述"] value字符长度不超过100
     **/
    private $extendParams;

    /**
        系统商订单号
     **/
    private $orderId;

    /**
        创单出票失败原因信息
     **/
    private $failMsg;

    /**
        凭证信息 无数据时传空集合
     **/
    private $vouchers;

    /**
        创单结果状态 1：创单出票成功， 2：创单出票失败
     **/
    private $status;

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

    public function getFailMsg() : string{
        return $this->failMsg;
    }

    public function setFailMsg(string $failMsg){
        $this->failMsg = $failMsg;
    }

    public function getVouchers() : array{
        return $this->vouchers;
    }

    public function setVouchers(array $vouchers){
        $this->vouchers = $vouchers;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getFliggyOrderId() : string{
        return $this->fliggyOrderId;
    }

    public function setFliggyOrderId(string $fliggyOrderId){
        $this->fliggyOrderId = $fliggyOrderId;
    }


    public function getApiName() : string {
        return "alitrip.travel.hotelticket.order.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->extendParams)) {
            $requestParam["extend_params"] = TopUtil::convertBasic($this->extendParams);
        }

        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        if (!TopUtil::checkEmpty($this->failMsg)) {
            $requestParam["fail_msg"] = TopUtil::convertBasic($this->failMsg);
        }

        if (!TopUtil::checkEmpty($this->vouchers)) {
            $requestParam["vouchers"] = TopUtil::convertStructList($this->vouchers);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
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

