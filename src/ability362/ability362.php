<?php
namespace Topsdk\Topapi\Ability362;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability362\Request\AlitripTravelHotelticketOrderCreateRequest;
use Topsdk\Topapi\Ability362\Request\AlitripTravelHotelticketOrderRefundRequest;
use Topsdk\Topapi\Ability362\Request\AlitripTravelHotelticketOrderVerifyRequest;
use Topsdk\Topapi\Ability362\Request\AlitripTravelHotelticketProductProductupdateRequest;
use Topsdk\Topapi\Ability362\Request\AlitripTravelHotelticketProductProductupdatepushRequest;
use Topsdk\Topapi\Ability362\Request\TaobaoTravelTicketOrderVerifyRequest;
use Topsdk\Topapi\Ability362\Request\TaobaoTravelTicketOrderRefundRequest;

class Ability362 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        创单(支付订单)通知
    **/
    public function alitripTravelHotelticketOrderCreate(AlitripTravelHotelticketOrderCreateRequest $request) {
        return $this->client->execute("alitrip.travel.hotelticket.order.create", $request->toMap(), $request->toFileParamMap());
    }
    /**
        退款结结果通知
    **/
    public function alitripTravelHotelticketOrderRefund(AlitripTravelHotelticketOrderRefundRequest $request) {
        return $this->client->execute("alitrip.travel.hotelticket.order.refund", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订单核销通知
    **/
    public function alitripTravelHotelticketOrderVerify(AlitripTravelHotelticketOrderVerifyRequest $request) {
        return $this->client->execute("alitrip.travel.hotelticket.order.verify", $request->toMap(), $request->toFileParamMap());
    }
    /**
        产品批量变更通知
    **/
    public function alitripTravelHotelticketProductProductupdate(AlitripTravelHotelticketProductProductupdateRequest $request) {
        return $this->client->execute("alitrip.travel.hotelticket.product.productupdate", $request->toMap(), $request->toFileParamMap());
    }
    /**
        产品批量变更推送通知
    **/
    public function alitripTravelHotelticketProductProductupdatepush(AlitripTravelHotelticketProductProductupdatepushRequest $request) {
        return $this->client->execute("alitrip.travel.hotelticket.product.productupdatepush", $request->toMap(), $request->toFileParamMap());
    }
    /**
        飞猪门票核销通知
    **/
    public function taobaoTravelTicketOrderVerify(TaobaoTravelTicketOrderVerifyRequest $request) {
        return $this->client->execute("taobao.travel.ticket.order.verify", $request->toMap(), $request->toFileParamMap());
    }
    /**
        飞猪门票退票结果通知
    **/
    public function taobaoTravelTicketOrderRefund(TaobaoTravelTicketOrderRefundRequest $request) {
        return $this->client->execute("taobao.travel.ticket.order.refund", $request->toMap(), $request->toFileParamMap());
    }
}