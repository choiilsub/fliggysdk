<?php
namespace Topsdk\Topapi\Ability347\Domain;

class TaobaoXhotelBnbreviewAddReviewPicInfo {

    /**
        图片地址
     **/
    public $url;


    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }


}

