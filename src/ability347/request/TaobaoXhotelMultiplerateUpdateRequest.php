<?php
namespace Topsdk\Topapi\Ability347\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoXhotelMultiplerateUpdateRequest {

    /**
        废弃，使用rate_plan_code
     **/
    private $rpid;

    /**
        价格状态。0为不可售；1为可售，默认可售
     **/
    private $status;

    /**
        卖家房型ID
     **/
    private $outRid;

    /**
        价格开关 date：开关状态控制的那一天；rate_status：开关状态(0，关闭；1，打开); checkin_status：入住开关(0，关闭；1，打开)；checkout_status：离店开关 (0，关闭；1，打开)
     **/
    private $rateSwitchCal;

    /**
        连住天数(范围1~5)
     **/
    private $lengthofstay;

    /**
        入住人数(范围1~10)
     **/
    private $occupancy;

    /**
        币种.CNY为人民币
     **/
    private $currencyCode;

    /**
        卖家自己系统的房价code
     **/
    private $ratePlanCode;

    /**
        价格和库存信息。 A:use_room_inventory:是否使用房型共享库存，可选值 true false ,false时：使用房价专有库存，此时要求价格和库存必填。 B:date 日期必须为 T---T+180 日内的日期（T为当天），且不能重复 C:price 价格 int类型 取值范围1-99999999 单位为分 D:quota 库存 int 类型 取值范围 0-999（数量库存） 60000(状态库存关) 61000(状态库存开) tax为税费，addBed为加床价，addPerson为加人价1,若连住大于1，price请推送总价
     **/
    private $inventoryPrice;

    /**
        废弃
     **/
    private $name;

    /**
        废弃，使用out_rid
     **/
    private $gid;

    /**
        系统商，一般不填写，使用须申请
     **/
    private $vendor;

    /**
        儿童人数
     **/
    private $childnum;

    /**
        婴儿人数
     **/
    private $infantnum;

    /**
        锁库存截止时间，如果当前时间是在锁库存开始时间和截止时间之间，那么不允许修改该活动库存（包含开始时间和截止时间）
     **/
    private $lockEndTime;

    /**
        锁库存开始时间，如果当前时间是在锁库存开始时间和截止时间之间，那么不允许修改该活动库存（包含开始时间和截止时间）
     **/
    private $lockStartTime;

    /**
        在线预约关联关系推送，priceRuleNumber：加价规则序号
     **/
    private $onlineBookingBindingInfo;


    public function getRpid() : int{
        return $this->rpid;
    }

    public function setRpid(int $rpid){
        $this->rpid = $rpid;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
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

    public function getLengthofstay() : int{
        return $this->lengthofstay;
    }

    public function setLengthofstay(int $lengthofstay){
        $this->lengthofstay = $lengthofstay;
    }

    public function getOccupancy() : int{
        return $this->occupancy;
    }

    public function setOccupancy(int $occupancy){
        $this->occupancy = $occupancy;
    }

    public function getCurrencyCode() : string{
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode){
        $this->currencyCode = $currencyCode;
    }

    public function getRatePlanCode() : string{
        return $this->ratePlanCode;
    }

    public function setRatePlanCode(string $ratePlanCode){
        $this->ratePlanCode = $ratePlanCode;
    }

    public function getInventoryPrice() : string{
        return $this->inventoryPrice;
    }

    public function setInventoryPrice(string $inventoryPrice){
        $this->inventoryPrice = $inventoryPrice;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getGid() : int{
        return $this->gid;
    }

    public function setGid(int $gid){
        $this->gid = $gid;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }

    public function getChildnum() : int{
        return $this->childnum;
    }

    public function setChildnum(int $childnum){
        $this->childnum = $childnum;
    }

    public function getInfantnum() : int{
        return $this->infantnum;
    }

    public function setInfantnum(int $infantnum){
        $this->infantnum = $infantnum;
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

    public function getOnlineBookingBindingInfo() : string{
        return $this->onlineBookingBindingInfo;
    }

    public function setOnlineBookingBindingInfo(string $onlineBookingBindingInfo){
        $this->onlineBookingBindingInfo = $onlineBookingBindingInfo;
    }


    public function getApiName() : string {
        return "taobao.xhotel.multiplerate.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rpid)) {
            $requestParam["rpid"] = TopUtil::convertBasic($this->rpid);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->outRid)) {
            $requestParam["out_rid"] = TopUtil::convertBasic($this->outRid);
        }

        if (!TopUtil::checkEmpty($this->rateSwitchCal)) {
            $requestParam["rate_switch_cal"] = TopUtil::convertBasic($this->rateSwitchCal);
        }

        if (!TopUtil::checkEmpty($this->lengthofstay)) {
            $requestParam["lengthofstay"] = TopUtil::convertBasic($this->lengthofstay);
        }

        if (!TopUtil::checkEmpty($this->occupancy)) {
            $requestParam["occupancy"] = TopUtil::convertBasic($this->occupancy);
        }

        if (!TopUtil::checkEmpty($this->currencyCode)) {
            $requestParam["currency_code"] = TopUtil::convertBasic($this->currencyCode);
        }

        if (!TopUtil::checkEmpty($this->ratePlanCode)) {
            $requestParam["rate_plan_code"] = TopUtil::convertBasic($this->ratePlanCode);
        }

        if (!TopUtil::checkEmpty($this->inventoryPrice)) {
            $requestParam["inventory_price"] = TopUtil::convertBasic($this->inventoryPrice);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->gid)) {
            $requestParam["gid"] = TopUtil::convertBasic($this->gid);
        }

        if (!TopUtil::checkEmpty($this->vendor)) {
            $requestParam["vendor"] = TopUtil::convertBasic($this->vendor);
        }

        if (!TopUtil::checkEmpty($this->childnum)) {
            $requestParam["childnum"] = TopUtil::convertBasic($this->childnum);
        }

        if (!TopUtil::checkEmpty($this->infantnum)) {
            $requestParam["infantnum"] = TopUtil::convertBasic($this->infantnum);
        }

        if (!TopUtil::checkEmpty($this->lockEndTime)) {
            $requestParam["lock_end_time"] = TopUtil::convertBasic($this->lockEndTime);
        }

        if (!TopUtil::checkEmpty($this->lockStartTime)) {
            $requestParam["lock_start_time"] = TopUtil::convertBasic($this->lockStartTime);
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

