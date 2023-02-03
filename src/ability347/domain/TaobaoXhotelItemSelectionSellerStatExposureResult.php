<?php
namespace Topsdk\Topapi\Ability347\Domain;

class TaobaoXhotelItemSelectionSellerStatExposureResult {

    /**
        错误码
     **/
    public $code;

    /**
        是否成功
     **/
    public $success;

    /**
        返回结果
     **/
    public $module;

    /**
        接口信息
     **/
    public $message;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getModule() : TaobaoXhotelItemSelectionSellerStatExposureModule{
        return $this->module;
    }

    public function setModule(TaobaoXhotelItemSelectionSellerStatExposureModule $module){
        $this->module = $module;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }


}

