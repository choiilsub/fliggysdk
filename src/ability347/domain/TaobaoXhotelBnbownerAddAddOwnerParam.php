<?php
namespace Topsdk\Topapi\Ability347\Domain;

class TaobaoXhotelBnbownerAddAddOwnerParam {

    /**
        房东头像地址，大小不超过3M，格式格式限制"png", "jpg", "jpeg"
     **/
    public $avatar_url;

    /**
        订单平均确认时长（单位分钟，要求大于0）
     **/
    public $avg_confirm_time;

    /**
        房东的生日（年-月-日 00:00:00）
     **/
    public $birthday;

    /**
        房东所在城市编码。参见：http://hotel.alitrip.com/area.htm，domestic为false时，输入对应国家的海外城市编码，可调用海外城市查询接口获取；
     **/
    public $city;

    /**
        订单接单率 0-100，百分比分子
     **/
    public $confirm_rate;

    /**
        星座 -1:错误，未知, 0:白羊,1:金牛,2:双子,3:巨蟹,4:狮子,5:处女,6:天秤,7:天蝎,8:射手,9:摩羯,10:水瓶,11:双鱼
     **/
    public $constellation;

    /**
        国内固定传"China"；国外必须传定义的海外国家编码值。参见：http://hotel.alitrip.com/area.htm
     **/
    public $country;

    /**
        房东介绍，长度限制2048个字符
     **/
    public $description;

    /**
        邮箱
     **/
    public $email;

    /**
        性别，M-男性,F-女性，U-未知
     **/
    public $gender;

    /**
        爱好，用英文逗号分割 如"游泳,爬山"
     **/
    public $hobbies;

    /**
        身份证号
     **/
    public $id_number;

    /**
        房东标签，英文逗号分割，如"超赞,有爱"
     **/
    public $labels;

    /**
        房东等级评分，0-100，房东等级越高越优秀
     **/
    public $level;

    /**
        经营资质执照类型对应的名称，执照类型1（身份证）：身份证姓名；执照类型2（护照）：护照姓名；执照类型3（营业执照）：企业名称
     **/
    public $license_name;

    /**
        经营资质执照类型对应的编码，执照类型1（身份证）：身份证号；执照类型2（护照）：护照号；执照类型3（营业执照）：营业执照编号
     **/
    public $license_no;

    /**
        经营资质执照类型 ，1 身份证(默认)、2 护照、3 营业执照
     **/
    public $license_type;

    /**
        移动电话号码。移动电话号码与固定电话号码二者必须填一个
     **/
    public $mobile_phone;

    /**
        房东昵称
     **/
    public $nick_name;

    /**
        房东Id，供货商自己库中的房东Id
     **/
    public $outer_id;

    /**
        房东类型，枚举 1.个人房东；2.商户经营；3.其他
     **/
    public $owner_type;

    /**
        好评率，0-100，百分比分子，数字越大好评率越高
     **/
    public $positive_feedback;

    /**
        职业
     **/
    public $profession;

    /**
        省份编码。选填，不填入的时候已city字段为准.参见：http://hotel.alitrip.com/area.htm
     **/
    public $province;

    /**
        学历 1:小学,2:初中,3:高中,4:本科,5:硕士,6:博士,7:博士后,0:其他
     **/
    public $qualification;

    /**
        房东的真实联系方式，不能填第三方转接号码
     **/
    public $real_contact;

    /**
        实名认证姓名
     **/
    public $real_name;

    /**
        回复率，0-100，百分比分子，数字越大回复率越高
     **/
    public $response_rate;

    /**
        房东故事，json串，可以传图片和文本： {"pics":[""],"content":""}
     **/
    public $story;

    /**
        固定电话。移动电话号码与固定电话号码二者必须填一个
     **/
    public $telephone;

    /**
        实名验证方式，认证情况:1:身份验证,2:头像验证,4:手机验证,8:邮箱验证,可以二进制叠加,二进制各位代表含义
     **/
    public $validate;

    /**
        对接系统商名称：可为空不要乱填，需要申请后使用
     **/
    public $vendor;


    public function getAvatarUrl() : string{
        return $this->avatar_url;
    }

    public function setAvatarUrl(string $avatarUrl){
        $this->avatar_url = $avatarUrl;
    }

    public function getAvgConfirmTime() : int{
        return $this->avg_confirm_time;
    }

    public function setAvgConfirmTime(int $avgConfirmTime){
        $this->avg_confirm_time = $avgConfirmTime;
    }

    public function getBirthday() : string{
        return $this->birthday;
    }

    public function setBirthday(string $birthday){
        $this->birthday = $birthday;
    }

    public function getCity() : int{
        return $this->city;
    }

    public function setCity(int $city){
        $this->city = $city;
    }

    public function getConfirmRate() : int{
        return $this->confirm_rate;
    }

    public function setConfirmRate(int $confirmRate){
        $this->confirm_rate = $confirmRate;
    }

    public function getConstellation() : int{
        return $this->constellation;
    }

    public function setConstellation(int $constellation){
        $this->constellation = $constellation;
    }

    public function getCountry() : string{
        return $this->country;
    }

    public function setCountry(string $country){
        $this->country = $country;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getEmail() : string{
        return $this->email;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getGender() : string{
        return $this->gender;
    }

    public function setGender(string $gender){
        $this->gender = $gender;
    }

    public function getHobbies() : string{
        return $this->hobbies;
    }

    public function setHobbies(string $hobbies){
        $this->hobbies = $hobbies;
    }

    public function getIdNumber() : string{
        return $this->id_number;
    }

    public function setIdNumber(string $idNumber){
        $this->id_number = $idNumber;
    }

    public function getLabels() : string{
        return $this->labels;
    }

    public function setLabels(string $labels){
        $this->labels = $labels;
    }

    public function getLevel() : int{
        return $this->level;
    }

    public function setLevel(int $level){
        $this->level = $level;
    }

    public function getLicenseName() : string{
        return $this->license_name;
    }

    public function setLicenseName(string $licenseName){
        $this->license_name = $licenseName;
    }

    public function getLicenseNo() : string{
        return $this->license_no;
    }

    public function setLicenseNo(string $licenseNo){
        $this->license_no = $licenseNo;
    }

    public function getLicenseType() : int{
        return $this->license_type;
    }

    public function setLicenseType(int $licenseType){
        $this->license_type = $licenseType;
    }

    public function getMobilePhone() : string{
        return $this->mobile_phone;
    }

    public function setMobilePhone(string $mobilePhone){
        $this->mobile_phone = $mobilePhone;
    }

    public function getNickName() : string{
        return $this->nick_name;
    }

    public function setNickName(string $nickName){
        $this->nick_name = $nickName;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getOwnerType() : int{
        return $this->owner_type;
    }

    public function setOwnerType(int $ownerType){
        $this->owner_type = $ownerType;
    }

    public function getPositiveFeedback() : int{
        return $this->positive_feedback;
    }

    public function setPositiveFeedback(int $positiveFeedback){
        $this->positive_feedback = $positiveFeedback;
    }

    public function getProfession() : string{
        return $this->profession;
    }

    public function setProfession(string $profession){
        $this->profession = $profession;
    }

    public function getProvince() : int{
        return $this->province;
    }

    public function setProvince(int $province){
        $this->province = $province;
    }

    public function getQualification() : int{
        return $this->qualification;
    }

    public function setQualification(int $qualification){
        $this->qualification = $qualification;
    }

    public function getRealContact() : string{
        return $this->real_contact;
    }

    public function setRealContact(string $realContact){
        $this->real_contact = $realContact;
    }

    public function getRealName() : string{
        return $this->real_name;
    }

    public function setRealName(string $realName){
        $this->real_name = $realName;
    }

    public function getResponseRate() : int{
        return $this->response_rate;
    }

    public function setResponseRate(int $responseRate){
        $this->response_rate = $responseRate;
    }

    public function getStory() : string{
        return $this->story;
    }

    public function setStory(string $story){
        $this->story = $story;
    }

    public function getTelephone() : string{
        return $this->telephone;
    }

    public function setTelephone(string $telephone){
        $this->telephone = $telephone;
    }

    public function getValidate() : int{
        return $this->validate;
    }

    public function setValidate(int $validate){
        $this->validate = $validate;
    }

    public function getVendor() : string{
        return $this->vendor;
    }

    public function setVendor(string $vendor){
        $this->vendor = $vendor;
    }


}

