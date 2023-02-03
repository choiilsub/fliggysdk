<?php
namespace Topsdk\Topapi\Ability347;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbpromoAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelServicetimeUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelServicetimeGetRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelMultipleratesUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelMultiplerateUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelMultipleratesIncrementRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelMultiplerateDeleteRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelCityCoordinatesBatchUploadRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbpromoUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelIntlRateUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbpromoBindRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbpromoUnbindRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBaseinfoRoomGetRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelItemSelectionSellerStatSummaryRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelItemSelectionSellerStatExposureRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelItemSelectionSellerStatHotshidRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRatesLiteIncrUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbpromoDeleteRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbpromoGetRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRateDeleteRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbownerDeleteRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBaseinfoGetRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRoomtypeGetRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRoomtypeUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbroomtypeAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRoomtypeAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbhouseAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelGetRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbroomtypeDeleteRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbownerAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRoomGetRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRateplanGetRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRoomsUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRoomUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRatesUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRateUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRateGetRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRateAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRateplanUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRateplanAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelEntityConfigRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelGetEntityByTagRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelQuotaUpdateRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbreviewAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelCommentGetmixratelistRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelDeleteRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRoomtypeDeletePublicRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbhouseDeleteRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRoomtypeConflictDataRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelBnbcommonAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRatesIncrementRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRoomsIncrementRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelHouseAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelHouseRoomtypeAddRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRateRelationshipwithrpGetRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelCityCoordinatesBatchDownloadRequest;
use Topsdk\Topapi\Ability347\Request\TaobaoXhotelRateRelationshipwithroomGetRequest;

class Ability347 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        自促活动申请接口
    **/
    public function taobaoXhotelBnbpromoAdd(TaobaoXhotelBnbpromoAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        飞猪酒店多维度服务时间维护接口
    **/
    public function taobaoXhotelServicetimeUpdate(TaobaoXhotelServicetimeUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.servicetime.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询实体对应的服务时间数据
    **/
    public function taobaoXhotelServicetimeGet(TaobaoXhotelServicetimeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.servicetime.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        复杂价格推送接口（批量全量）
    **/
    public function taobaoXhotelMultipleratesUpdate(TaobaoXhotelMultipleratesUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.multiplerates.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        复杂价格推送接口（全量更新）
    **/
    public function taobaoXhotelMultiplerateUpdate(TaobaoXhotelMultiplerateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.multiplerate.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        复杂房价推送接口（批量增量）
    **/
    public function taobaoXhotelMultipleratesIncrement(TaobaoXhotelMultipleratesIncrementRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.multiplerates.increment", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        复杂价格删除
    **/
    public function taobaoXhotelMultiplerateDelete(TaobaoXhotelMultiplerateDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.multiplerate.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        上传信息计算飞猪国际城市
    **/
    public function taobaoXhotelCityCoordinatesBatchUpload(TaobaoXhotelCityCoordinatesBatchUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.city.coordinates.batch.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿营销活动更新
    **/
    public function taobaoXhotelBnbpromoUpdate(TaobaoXhotelBnbpromoUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        不落库商家推送更新酒店rate
    **/
    public function taobaoXhotelIntlRateUpdate(TaobaoXhotelIntlRateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.intl.rate.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        自促活动绑定接口
    **/
    public function taobaoXhotelBnbpromoBind(TaobaoXhotelBnbpromoBindRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.bind", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        自促活动解绑接口
    **/
    public function taobaoXhotelBnbpromoUnbind(TaobaoXhotelBnbpromoUnbindRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.unbind", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店房型与房价查询
    **/
    public function taobaoXhotelBaseinfoRoomGet(TaobaoXhotelBaseinfoRoomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.baseinfo.room.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家数据-选品整体概况
    **/
    public function taobaoXhotelItemSelectionSellerStatSummary(TaobaoXhotelItemSelectionSellerStatSummaryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.item.selection.seller.stat.summary", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        选品曝光趋势
    **/
    public function taobaoXhotelItemSelectionSellerStatExposure(TaobaoXhotelItemSelectionSellerStatExposureRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.item.selection.seller.stat.exposure", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        供应链选品热销标准酒店覆盖情况
    **/
    public function taobaoXhotelItemSelectionSellerStatHotshid(TaobaoXhotelItemSelectionSellerStatHotshidRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.item.selection.seller.stat.hotshid", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店价格库存轻量级增量接口
    **/
    public function taobaoXhotelRatesLiteIncrUpdate(TaobaoXhotelRatesLiteIncrUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rates.lite.incr.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿卖家活动删除
    **/
    public function taobaoXhotelBnbpromoDelete(TaobaoXhotelBnbpromoDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿查询营销活动
    **/
    public function taobaoXhotelBnbpromoGet(TaobaoXhotelBnbpromoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbpromo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        rate删除接口
    **/
    public function taobaoXhotelRateDelete(TaobaoXhotelRateDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿房东删除接口
    **/
    public function taobaoXhotelBnbownerDelete(TaobaoXhotelBnbownerDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbowner.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店基础信息查询接口
    **/
    public function taobaoXhotelBaseinfoGet(TaobaoXhotelBaseinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.baseinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型查询接口
    **/
    public function taobaoXhotelRoomtypeGet(TaobaoXhotelRoomtypeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.roomtype.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型更新接口（ID不存在自动新增）
    **/
    public function taobaoXhotelRoomtypeUpdate(TaobaoXhotelRoomtypeUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.roomtype.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿新增房源
    **/
    public function taobaoXhotelBnbroomtypeAdd(TaobaoXhotelBnbroomtypeAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbroomtype.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型新增接口（ID重复变更新）
    **/
    public function taobaoXhotelRoomtypeAdd(TaobaoXhotelRoomtypeAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.roomtype.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿门店信息添加
    **/
    public function taobaoXhotelBnbhouseAdd(TaobaoXhotelBnbhouseAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbhouse.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店查询接口
    **/
    public function taobaoXhotelGet(TaobaoXhotelGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿房源删除接口
    **/
    public function taobaoXhotelBnbroomtypeDelete(TaobaoXhotelBnbroomtypeDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbroomtype.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店更新接口（ID不存在自动新增）
    **/
    public function taobaoXhotelUpdate(TaobaoXhotelUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿房东信息添加
    **/
    public function taobaoXhotelBnbownerAdd(TaobaoXhotelBnbownerAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbowner.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店新增接口（ID重复自动更新）
    **/
    public function taobaoXhotelAdd(TaobaoXhotelAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        room实体查询
    **/
    public function taobaoXhotelRoomGet(TaobaoXhotelRoomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.room.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        价格计划rateplan查询
    **/
    public function taobaoXhotelRateplanGet(TaobaoXhotelRateplanGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rateplan.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型共享库存推送接口（批量全量）
    **/
    public function taobaoXhotelRoomsUpdate(TaobaoXhotelRoomsUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rooms.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型库存推送接口（全量推送）
    **/
    public function taobaoXhotelRoomUpdate(TaobaoXhotelRoomUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.room.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        价格推送接口（批量全量）
    **/
    public function taobaoXhotelRatesUpdate(TaobaoXhotelRatesUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rates.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        价格推送接口（全量更新）
    **/
    public function taobaoXhotelRateUpdate(TaobaoXhotelRateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店产品库rate查询
    **/
    public function taobaoXhotelRateGet(TaobaoXhotelRateGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        新增专享房价
    **/
    public function taobaoXhotelRateAdd(TaobaoXhotelRateAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        价格计划rateplan更新或添加
    **/
    public function taobaoXhotelRateplanUpdate(TaobaoXhotelRateplanUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rateplan.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        酒店产品库rateplan添加
    **/
    public function taobaoXhotelRateplanAdd(TaobaoXhotelRateplanAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rateplan.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        飞猪商品各实体通用配置
    **/
    public function taobaoXhotelEntityConfig(TaobaoXhotelEntityConfigRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.entity.config", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据标签查询实体
    **/
    public function taobaoXhotelGetEntityByTag(TaobaoXhotelGetEntityByTagRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.get.entity.by.tag", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        库存更新接口
    **/
    public function taobaoXhotelQuotaUpdate(TaobaoXhotelQuotaUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.quota.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        对外开放评论接口
    **/
    public function taobaoXhotelBnbreviewAdd(TaobaoXhotelBnbreviewAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbreview.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通用评价接口
    **/
    public function taobaoXhotelCommentGetmixratelist(TaobaoXhotelCommentGetmixratelistRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.comment.getmixratelist", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除酒店接口
    **/
    public function taobaoXhotelDelete(TaobaoXhotelDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家删除房型数据接口
    **/
    public function taobaoXhotelRoomtypeDeletePublic(TaobaoXhotelRoomtypeDeletePublicRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.roomtype.delete.public", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿门店删除接口
    **/
    public function taobaoXhotelBnbhouseDelete(TaobaoXhotelBnbhouseDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbhouse.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家床型冲突数据接口
    **/
    public function taobaoXhotelRoomtypeConflictData(TaobaoXhotelRoomtypeConflictDataRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.roomtype.conflict.data", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通用调用top接口
    **/
    public function taobaoXhotelBnbcommonAdd(TaobaoXhotelBnbcommonAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.bnbcommon.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        价格推送接口（批量增量）
    **/
    public function taobaoXhotelRatesIncrement(TaobaoXhotelRatesIncrementRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rates.increment", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        房型库存推送接口（批量增量）
    **/
    public function taobaoXhotelRoomsIncrement(TaobaoXhotelRoomsIncrementRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rooms.increment", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        非标准民宿房源添加
    **/
    public function taobaoXhotelHouseAdd(TaobaoXhotelHouseAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.house.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        民宿房型信息添加
    **/
    public function taobaoXhotelHouseRoomtypeAdd(TaobaoXhotelHouseRoomtypeAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.house.roomtype.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据gid查询卖家下所有的rpId
    **/
    public function taobaoXhotelRateRelationshipwithrpGet(TaobaoXhotelRateRelationshipwithrpGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.relationshipwithrp.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        下载飞猪国际城市结果
    **/
    public function taobaoXhotelCityCoordinatesBatchDownload(TaobaoXhotelCityCoordinatesBatchDownloadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.city.coordinates.batch.download", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询rpId
    **/
    public function taobaoXhotelRateRelationshipwithroomGet(TaobaoXhotelRateRelationshipwithroomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.xhotel.rate.relationshipwithroom.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}