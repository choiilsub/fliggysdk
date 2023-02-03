<?php
namespace Topsdk\Topapi\Ability362\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTravelTicketOrderVerifyRequest {

    /**
        核销次数
     **/
    private $checkNum;

    /**
        下单订单ID
     **/
    private $orderId;

    /**
        门票取消数量
     **/
    private $returnNum;

    /**
        门票总共允许核销次数
     **/
    private $totalNum;

    /**
        外部订单ID
     **/
    private $outOrderId;

    /**
        (新接入使用voucher_infos)用户短信会收到的确认号
     **/
    private $confirmCode;

    /**
        使用凭证信息
     **/
    private $voucherInfos;

    /**
        供应商核销回调类型：0表示使用本次核销数量（常规），1表示使用总核销数量（已使用+本次）
     **/
    private $writeOffType;


    public function getCheckNum() : int{
        return $this->checkNum;
    }

    public function setCheckNum(int $checkNum){
        $this->checkNum = $checkNum;
    }

    public function getOrderId() : int{
        return $this->orderId;
    }

    public function setOrderId(int $orderId){
        $this->orderId = $orderId;
    }

    public function getReturnNum() : int{
        return $this->returnNum;
    }

    public function setReturnNum(int $returnNum){
        $this->returnNum = $returnNum;
    }

    public function getTotalNum() : int{
        return $this->totalNum;
    }

    public function setTotalNum(int $totalNum){
        $this->totalNum = $totalNum;
    }

    public function getOutOrderId() : string{
        return $this->outOrderId;
    }

    public function setOutOrderId(string $outOrderId){
        $this->outOrderId = $outOrderId;
    }

    public function getConfirmCode() : string{
        return $this->confirmCode;
    }

    public function setConfirmCode(string $confirmCode){
        $this->confirmCode = $confirmCode;
    }

    public function getVoucherInfos() : array{
        return $this->voucherInfos;
    }

    public function setVoucherInfos(array $voucherInfos){
        $this->voucherInfos = $voucherInfos;
    }

    public function getWriteOffType() : int{
        return $this->writeOffType;
    }

    public function setWriteOffType(int $writeOffType){
        $this->writeOffType = $writeOffType;
    }


    public function getApiName() : string {
        return "taobao.travel.ticket.order.verify";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->checkNum)) {
            $requestParam["check_num"] = TopUtil::convertBasic($this->checkNum);
        }

        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        if (!TopUtil::checkEmpty($this->returnNum)) {
            $requestParam["return_num"] = TopUtil::convertBasic($this->returnNum);
        }

        if (!TopUtil::checkEmpty($this->totalNum)) {
            $requestParam["total_num"] = TopUtil::convertBasic($this->totalNum);
        }

        if (!TopUtil::checkEmpty($this->outOrderId)) {
            $requestParam["out_order_id"] = TopUtil::convertBasic($this->outOrderId);
        }

        if (!TopUtil::checkEmpty($this->confirmCode)) {
            $requestParam["confirm_code"] = TopUtil::convertBasic($this->confirmCode);
        }

        if (!TopUtil::checkEmpty($this->voucherInfos)) {
            $requestParam["voucher_infos"] = TopUtil::convertStructList($this->voucherInfos);
        }

        if (!TopUtil::checkEmpty($this->writeOffType)) {
            $requestParam["write_off_type"] = TopUtil::convertBasic($this->writeOffType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

