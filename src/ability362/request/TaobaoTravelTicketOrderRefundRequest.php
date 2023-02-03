<?php
namespace Topsdk\Topapi\Ability362\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTravelTicketOrderRefundRequest {

    /**
        退票数量
     **/
    private $refundNum;

    /**
        下单时订单ID
     **/
    private $orderId;

    /**
        退票结果；1: 退票成功；2: 退票失败
     **/
    private $refundStatus;

    /**
        退票失败理由
     **/
    private $refundFailureReason;

    /**
        退票的批次号
     **/
    private $refundBatchNo;


    public function getRefundNum() : int{
        return $this->refundNum;
    }

    public function setRefundNum(int $refundNum){
        $this->refundNum = $refundNum;
    }

    public function getOrderId() : int{
        return $this->orderId;
    }

    public function setOrderId(int $orderId){
        $this->orderId = $orderId;
    }

    public function getRefundStatus() : int{
        return $this->refundStatus;
    }

    public function setRefundStatus(int $refundStatus){
        $this->refundStatus = $refundStatus;
    }

    public function getRefundFailureReason() : string{
        return $this->refundFailureReason;
    }

    public function setRefundFailureReason(string $refundFailureReason){
        $this->refundFailureReason = $refundFailureReason;
    }

    public function getRefundBatchNo() : string{
        return $this->refundBatchNo;
    }

    public function setRefundBatchNo(string $refundBatchNo){
        $this->refundBatchNo = $refundBatchNo;
    }


    public function getApiName() : string {
        return "taobao.travel.ticket.order.refund";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->refundNum)) {
            $requestParam["refund_num"] = TopUtil::convertBasic($this->refundNum);
        }

        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        if (!TopUtil::checkEmpty($this->refundStatus)) {
            $requestParam["refund_status"] = TopUtil::convertBasic($this->refundStatus);
        }

        if (!TopUtil::checkEmpty($this->refundFailureReason)) {
            $requestParam["refund_failure_reason"] = TopUtil::convertBasic($this->refundFailureReason);
        }

        if (!TopUtil::checkEmpty($this->refundBatchNo)) {
            $requestParam["refund_batch_no"] = TopUtil::convertBasic($this->refundBatchNo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

