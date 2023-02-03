<?php
namespace Topsdk\Topapi\Ability362\Request;
use Topsdk\Topapi\TopUtil;

class AlitripTravelHotelticketOrderRefundRequest {

    /**
        系统商订单号
     **/
    private $orderId;

    /**
        退款失败原因
     **/
    private $failMsg;

    /**
        退款结果状态 1:退款成功  2:退款失败
     **/
    private $status;

    /**
        飞猪订单号
     **/
    private $fliggyOrderId;


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
        return "alitrip.travel.hotelticket.order.refund";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        if (!TopUtil::checkEmpty($this->failMsg)) {
            $requestParam["fail_msg"] = TopUtil::convertBasic($this->failMsg);
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

