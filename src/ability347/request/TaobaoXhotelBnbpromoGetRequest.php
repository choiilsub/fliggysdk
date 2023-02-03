<?php
namespace Topsdk\Topapi\Ability347\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoXhotelBnbpromoGetRequest {

    /**
        外部活动code
     **/
    private $outerActivityCode;


    public function getOuterActivityCode() : string{
        return $this->outerActivityCode;
    }

    public function setOuterActivityCode(string $outerActivityCode){
        $this->outerActivityCode = $outerActivityCode;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbpromo.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->outerActivityCode)) {
            $requestParam["outer_activity_code"] = TopUtil::convertBasic($this->outerActivityCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

