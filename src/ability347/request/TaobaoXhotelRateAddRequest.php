<?php
namespace Topsdk\Topapi\Ability347\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoXhotelRateAddRequest {

    /**
        gid酒店商品id
     **/
    private $gid;

    /**
        酒店RPID
     **/
    private $rpid;

    /**
        用于标示该宝贝的售卖渠道信息，允许同一个卖家酒店房型在淘宝系统发布多个售卖渠道的宝贝的价格。
     **/
    private $vendor;

    /**
        卖家自己系统的Code，简称RateCode
     **/
    private $rateplanCode;

    /**
        卖家房型ID, 这是卖家自己系统中的房型ID，注意：需按照规则组合
     **/
    private $outRid;

    /**
        在添加新rate时，同时添加rate开关日历。可以只设定想设定的某些天，可以不连续。date：开关状态控制的是那一天rate_status：开关状态。0，关闭；1，打开
     **/
    private $rateSwitchCal;

    /**
        名称
     **/
    private $name;

    /**
        价格和库存信息。A:use_room_inventory:是否使用room级别共享库存，可选值 true false 1、true时：使用room级别共享库存（即使用gid对应的XRoom中的inventory），rate_quota_map 的json 数据中不需要录入库存信息,录入的库存信息会忽略 2、false时：使用rate级别私有库存，此时要求价格和库存必填。B:date  日期必须为 T---T+90 日内的日期（T为当天），且不能重复C:price 价格 int类型 取值范围1-99999999 单位为分D:quota 库存 int 类型 取值范围  0-999（数量库存）  60000(状态库存关) 61000(状态库存开)
     **/
    private $inventoryPrice;

    /**
        额外服务-是否可以加床，1：不可以，2：可以
     **/
    private $addBed;

    /**
        额外服务-加床价格
     **/
    private $addBedPrice;

    /**
        币种（仅支持CNY）
     **/
    private $currencyCode;

    /**
        实价有房标签（RP支付类型为全额支付）
     **/
    private $shijiaTag;

    /**
        “即时确认”标识，此类商品预订后直接发货。
     **/
    private $jishiquerenTag;

    /**
        锁库存截止时间，如果当前时间是在锁库存开始时间和截止时间之间，那么不允许修改该活动库存（包含开始时间和截止时间）
     **/
    private $lockEndTime;

    /**
        锁库存开始时间，如果当前时间是在锁库存开始时间和截止时间之间，那么不允许修改该活动库存（包含开始时间和截止时间）
     **/
    private $lockStartTime;

    /**
        币种信息,默认是CNY,  @see com.taobao.trip.hotel.model.enums.CurrencyEnum
     **/
    private $currencyCodeName;

    /**
        操作人信息
     **/
    private $operator;

    /**
        默认是2 ,
     **/
    private $source;

    /**
        1是开,0是关, 不填默认是开, rate状态
     **/
    private $status;

    /**
        在线预约关联关系推送，priceRuleNumber：加价规则序号
     **/
    private $onlineBookingBindingInfo;


    public function getGid() : int{
        return $this->gid;
    }

    public function setGid(int $gid){
        $this->gid = $gid;
    }

    public function getRpid() : int{
        return $this->rpid;
    }

    public function setRpid(int $rpid){
        $this->rpid = $rpid;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getRateplanCode() : string{
        return $this->rateplanCode;
    }

    public function setRateplanCode(string $rateplanCode){
        $this->rateplanCode = $rateplanCode;
    }

    public function getOutRid() : string{
        return $this->outRid;
    }

    public function setOutRid(string $outRid){
        $this->outRid = $outRid;
    }

    public function getRateSwitchCal() : string{
        return $this->rateSwitchCal;
    }

    public function setRateSwitchCal(string $rateSwitchCal){
        $this->rateSwitchCal = $rateSwitchCal;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getInventoryPrice() : string{
        return $this->inventoryPrice;
    }

    public function setInventoryPrice(string $inventoryPrice){
        $this->inventoryPrice = $inventoryPrice;
    }

    public function getAddBed() : int{
        return $this->addBed;
    }

    public function setAddBed(int $addBed){
        $this->addBed = $addBed;
    }

    public function getAddBedPrice() : int{
        return $this->addBedPrice;
    }

    public function setAddBedPrice(int $addBedPrice){
        $this->addBedPrice = $addBedPrice;
    }

    public function getCurrencyCode() : int{
        return $this->currencyCode;
    }

    public function setCurrencyCode(int $currencyCode){
        $this->currencyCode = $currencyCode;
    }

    public function getShijiaTag() : int{
        return $this->shijiaTag;
    }

    public function setShijiaTag(int $shijiaTag){
        $this->shijiaTag = $shijiaTag;
    }

    public function getJishiquerenTag() : int{
        return $this->jishiquerenTag;
    }

    public function setJishiquerenTag(int $jishiquerenTag){
        $this->jishiquerenTag = $jishiquerenTag;
    }

    public function getLockEndTime() : string{
        return $this->lockEndTime;
    }

    public function setLockEndTime(string $lockEndTime){
        $this->lockEndTime = $lockEndTime;
    }

    public function getLockStartTime() : string{
        return $this->lockStartTime;
    }

    public function setLockStartTime(string $lockStartTime){
        $this->lockStartTime = $lockStartTime;
    }

    public function getCurrencyCodeName() : string{
        return $this->currencyCodeName;
    }

    public function setCurrencyCodeName(string $currencyCodeName){
        $this->currencyCodeName = $currencyCodeName;
    }

    public function getOperator() : string{
        return $this->operator;
    }

    public function setOperator(string $operator){
        $this->operator = $operator;
    }

    public function getSource() : int{
        return $this->source;
    }

    public function setSource(int $source){
        $this->source = $source;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getOnlineBookingBindingInfo() : string{
        return $this->onlineBookingBindingInfo;
    }

    public function setOnlineBookingBindingInfo(string $onlineBookingBindingInfo){
        $this->onlineBookingBindingInfo = $onlineBookingBindingInfo;
    }


    public function getApiName() : string {
        return "taobao.xhotel.rate.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->gid)) {
            $requestParam["gid"] = TopUtil::convertBasic($this->gid);
        }

        if (!TopUtil::checkEmpty($this->rpid)) {
            $requestParam["rpid"] = TopUtil::convertBasic($this->rpid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->rateplanCode)) {
            $requestParam["rateplan_code"] = TopUtil::convertBasic($this->rateplanCode);
        }

        if (!TopUtil::checkEmpty($this->outRid)) {
            $requestParam["out_rid"] = TopUtil::convertBasic($this->outRid);
        }

        if (!TopUtil::checkEmpty($this->rateSwitchCal)) {
            $requestParam["rate_switch_cal"] = TopUtil::convertBasic($this->rateSwitchCal);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->inventoryPrice)) {
            $requestParam["inventory_price"] = TopUtil::convertBasic($this->inventoryPrice);
        }

        if (!TopUtil::checkEmpty($this->addBed)) {
            $requestParam["add_bed"] = TopUtil::convertBasic($this->addBed);
        }

        if (!TopUtil::checkEmpty($this->addBedPrice)) {
            $requestParam["add_bed_price"] = TopUtil::convertBasic($this->addBedPrice);
        }

        if (!TopUtil::checkEmpty($this->currencyCode)) {
            $requestParam["currency_code"] = TopUtil::convertBasic($this->currencyCode);
        }

        if (!TopUtil::checkEmpty($this->shijiaTag)) {
            $requestParam["shijia_tag"] = TopUtil::convertBasic($this->shijiaTag);
        }

        if (!TopUtil::checkEmpty($this->jishiquerenTag)) {
            $requestParam["jishiqueren_tag"] = TopUtil::convertBasic($this->jishiquerenTag);
        }

        if (!TopUtil::checkEmpty($this->lockEndTime)) {
            $requestParam["lock_end_time"] = TopUtil::convertBasic($this->lockEndTime);
        }

        if (!TopUtil::checkEmpty($this->lockStartTime)) {
            $requestParam["lock_start_time"] = TopUtil::convertBasic($this->lockStartTime);
        }

        if (!TopUtil::checkEmpty($this->currencyCodeName)) {
            $requestParam["currency_code_name"] = TopUtil::convertBasic($this->currencyCodeName);
        }

        if (!TopUtil::checkEmpty($this->operator)) {
            $requestParam["operator"] = TopUtil::convertBasic($this->operator);
        }

        if (!TopUtil::checkEmpty($this->source)) {
            $requestParam["source"] = TopUtil::convertBasic($this->source);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->onlineBookingBindingInfo)) {
            $requestParam["online_booking_binding_info"] = TopUtil::convertBasic($this->onlineBookingBindingInfo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

