<?php
namespace Topsdk\Topapi\Ability362\Domain;

class AlitripTravelHotelticketOrderVerifyHotelTicketVerifyVoucherDTO {

    /**
        凭证码
     **/
    public $code;

    /**
        使用时间：yyyy-MM-dd HH:mm:ss
     **/
    public $use_date;

    /**
        证件号
     **/
    public $certificate_id;

    /**
        凭证类型 1：票码， 2：券码
     **/
    public $type;

    /**
        票或券 核销使用数量
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

    public function getUseDate() : string{
        return $this->use_date;
    }

    public function setUseDate(string $useDate){
        $this->use_date = $useDate;
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

