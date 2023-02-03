<?php
namespace Topsdk\Topapi\Ability362\Domain;

class AlitripTravelHotelticketOrderCreateHotelTicketVoucherDTO {

    /**
        凭证码
     **/
    public $code;

    /**
        每张票或券可使用次数（如针对一码多刷，往返索道3张票1个码，每张票可使用次数为2，则该码可以刷6次
     **/
    public $available_nums;

    /**
        证件号
     **/
    public $certificate_id;

    /**
        凭证类型 1：票码， 2：券码 
     **/
    public $type;

    /**
        二维码图片链接
     **/
    public $url;

    /**
        凭证 可用/不可用
     **/
    public $can_use;

    /**
        已使用次数
     **/
    public $usage_nums;

    /**
        业务类型：1：门票， 2：酒店
     **/
    public $biz_type;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getAvailableNums() : int{
        return $this->available_nums;
    }

    public function setAvailableNums(int $availableNums){
        $this->available_nums = $availableNums;
    }

    public function getCertificateId() : string{
        return $this->certificate_id;
    }

    public function setCertificateId(string $certificateId){
        $this->certificate_id = $certificateId;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getCanUse() : bool{
        return $this->can_use;
    }

    public function setCanUse(bool $canUse){
        $this->can_use = $canUse;
    }

    public function getUsageNums() : int{
        return $this->usage_nums;
    }

    public function setUsageNums(int $usageNums){
        $this->usage_nums = $usageNums;
    }

    public function getBizType() : int{
        return $this->biz_type;
    }

    public function setBizType(int $bizType){
        $this->biz_type = $bizType;
    }


}

