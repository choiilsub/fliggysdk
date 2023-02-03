<?php
namespace Topsdk\Topapi\Ability362\Domain;

class TaobaoTravelTicketOrderVerifyVoucherInfoDto {

    /**
        用户短信会收到的确认号
     **/
    public $confirm_code;

    /**
        凭证使用次数
     **/
    public $used_quantity;

    /**
        凭证使用时间，格式:yyyy-MM-dd HH:mm:ss
     **/
    public $used_date;


    public function getConfirmCode() : string{
        return $this->confirm_code;
    }

    public function setConfirmCode(string $confirmCode){
        $this->confirm_code = $confirmCode;
    }

    public function getUsedQuantity() : int{
        return $this->used_quantity;
    }

    public function setUsedQuantity(int $usedQuantity){
        $this->used_quantity = $usedQuantity;
    }

    public function getUsedDate() : string{
        return $this->used_date;
    }

    public function setUsedDate(string $usedDate){
        $this->used_date = $usedDate;
    }


}

