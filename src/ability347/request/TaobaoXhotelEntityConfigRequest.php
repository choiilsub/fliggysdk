<?php
namespace Topsdk\Topapi\Ability347\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoXhotelEntityConfigRequest {

    /**
        实体编码，例如酒店编码，房价编码
     **/
    private $entityCode;

    /**
        格式为：[{"invoice_status":"1"},{"invoice_has":"1"},{"invoice_canvat":"1"},{"invoice_provider":"2"},{"invoice_channel":"1"},{"invoice_payer":"1"},{"invoice_type":"1,2,3"},{"invoice_desc":"测试发票描叙123"}]  key-value形式的配置信息其中invoice_status为发票状态，取值为0(无效),1(有效);invoice_has是否能开发票，1(能),0(不能);invoice_canvat是否能提供增值税专用发票1(能),0(不能)；invoice_provider发票提供方1(酒店提供),2(卖家邮寄)；invoice_channel开票渠道，目前仅支持1(线下开具)；invoice_payer邮费承担方，1(卖家承担)，2(买家承担-邮费到付);invoice_type开票类型 1(代订房费),2(旅游费) 3(差旅费) 4(卖家提供Email版收据)  如果多个请以英文逗号隔开，例如1,2,3。invoice_desc发票补充说明，如果没有可以填写无，长度不要超过20字符。该接口是全量更新的形式，每次更新必须要携带这些节点信息，如果想失效掉该rp上的发票信息，那么可以将invoice_status设置为0。
     **/
    private $configData;

    /**
        默认是taobao。和酒店，房型等实体上的vendor保持一致。
     **/
    private $vendor;

    /**
        实体id,例如酒店id,房型id(飞猪平台的id),rpid等，目前仅支持rpid
     **/
    private $entityId;

    /**
        实体类型：1：卖家维度，2：酒店维度，3：房型维度，4：宝贝维度，5：rp维度。请注意目前仅支持类型5
     **/
    private $type;


    public function getEntityCode() : string{
        return $this->entityCode;
    }

    public function setEntityCode(string $entityCode){
        $this->entityCode = $entityCode;
    }

    public function getConfigData() : string{
        return $this->configData;
    }

    public function setConfigData(string $configData){
        $this->configData = $configData;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getEntityId() : int{
        return $this->entityId;
    }

    public function setEntityId(int $entityId){
        $this->entityId = $entityId;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


    public function getApiName() : string {
        return "taobao.xhotel.entity.config";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->entityCode)) {
            $requestParam["entity_code"] = TopUtil::convertBasic($this->entityCode);
        }

        if (!TopUtil::checkEmpty($this->configData)) {
            $requestParam["config_data"] = TopUtil::convertBasic($this->configData);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->entityId)) {
            $requestParam["entity_id"] = TopUtil::convertBasic($this->entityId);
        }

        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

