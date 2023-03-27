<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\AfeerExpress;
use Cargomart\ApiClient\Builder\Order\OrderId\Archive;
use Cargomart\ApiClient\Builder\Order\OrderId\Bid;
use Cargomart\ApiClient\Builder\Order\OrderId\Broker;
use Cargomart\ApiClient\Builder\Order\OrderId\Cancel;
use Cargomart\ApiClient\Builder\Order\OrderId\CarrierAsk;
use Cargomart\ApiClient\Builder\Order\OrderId\CarrierAskStat;
use Cargomart\ApiClient\Builder\Order\OrderId\CarrierContact;
use Cargomart\ApiClient\Builder\Order\OrderId\CarrierRefuse;
use Cargomart\ApiClient\Builder\Order\OrderId\CarrierSign;
use Cargomart\ApiClient\Builder\Order\OrderId\Chat;
use Cargomart\ApiClient\Builder\Order\OrderId\CheckDigitalEcnAccess;
use Cargomart\ApiClient\Builder\Order\OrderId\ClientAccess;
use Cargomart\ApiClient\Builder\Order\OrderId\Comment;
use Cargomart\ApiClient\Builder\Order\OrderId\ConsignorContact;
use Cargomart\ApiClient\Builder\Order\OrderId\ConsignorDocument;
use Cargomart\ApiClient\Builder\Order\OrderId\ConsignorRefuse;
use Cargomart\ApiClient\Builder\Order\OrderId\Contact;
use Cargomart\ApiClient\Builder\Order\OrderId\Correction;
use Cargomart\ApiClient\Builder\Order\OrderId\CustomerPatch;
use Cargomart\ApiClient\Builder\Order\OrderId\Document;
use Cargomart\ApiClient\Builder\Order\OrderId\Ecn;
use Cargomart\ApiClient\Builder\Order\OrderId\Edit;
use Cargomart\ApiClient\Builder\Order\OrderId\ExpeditorAssignment;
use Cargomart\ApiClient\Builder\Order\OrderId\ExpeditorOffer;
use Cargomart\ApiClient\Builder\Order\OrderId\ExpeditorPayment;
use Cargomart\ApiClient\Builder\Order\OrderId\Finish;
use Cargomart\ApiClient\Builder\Order\OrderId\FixPrice;
use Cargomart\ApiClient\Builder\Order\OrderId\GeneralPartnerDocument;
use Cargomart\ApiClient\Builder\Order\OrderId\GeneralPartnerProposalTemplate;
use Cargomart\ApiClient\Builder\Order\OrderId\GeneralPartnerProxyTemplate;
use Cargomart\ApiClient\Builder\Order\OrderId\GeneralPartnerTemplateApprove;
use Cargomart\ApiClient\Builder\Order\OrderId\InvoiceGpCarrier;
use Cargomart\ApiClient\Builder\Order\OrderId\Itinerary;
use Cargomart\ApiClient\Builder\Order\OrderId\Moderation;
use Cargomart\ApiClient\Builder\Order\OrderId\ModerationApprove;
use Cargomart\ApiClient\Builder\Order\OrderId\ModerationReject;
use Cargomart\ApiClient\Builder\Order\OrderId\Monitoring;
use Cargomart\ApiClient\Builder\Order\OrderId\Negotiate;
use Cargomart\ApiClient\Builder\Order\OrderId\Offer;
use Cargomart\ApiClient\Builder\Order\OrderId\OriginalDocsAccept;
use Cargomart\ApiClient\Builder\Order\OrderId\OriginalDocsReject;
use Cargomart\ApiClient\Builder\Order\OrderId\OriginalDocsTrackingNumber;
use Cargomart\ApiClient\Builder\Order\OrderId\Payment;
use Cargomart\ApiClient\Builder\Order\OrderId\Pin;
use Cargomart\ApiClient\Builder\Order\OrderId\Point;
use Cargomart\ApiClient\Builder\Order\OrderId\Proposal;
use Cargomart\ApiClient\Builder\Order\OrderId\Proxy;
use Cargomart\ApiClient\Builder\Order\OrderId\ProxyConsignorAdditionalInfo;
use Cargomart\ApiClient\Builder\Order\OrderId\ProxyConsignorCarrier;
use Cargomart\ApiClient\Builder\Order\OrderId\ProxyConsignorCarrierAdditionalInfo;
use Cargomart\ApiClient\Builder\Order\OrderId\ProxyConsignorCarrierSend;
use Cargomart\ApiClient\Builder\Order\OrderId\ProxyConsignorCarrierWithFacsimile;
use Cargomart\ApiClient\Builder\Order\OrderId\ProxyConsignorEmail;
use Cargomart\ApiClient\Builder\Order\OrderId\ProxyTemplate;
use Cargomart\ApiClient\Builder\Order\OrderId\Publish;
use Cargomart\ApiClient\Builder\Order\OrderId\RefreshDriver;
use Cargomart\ApiClient\Builder\Order\OrderId\RefreshTruck;
use Cargomart\ApiClient\Builder\Order\OrderId\Refuse;
use Cargomart\ApiClient\Builder\Order\OrderId\RefuseAppeal;
use Cargomart\ApiClient\Builder\Order\OrderId\RefuseCancel;
use Cargomart\ApiClient\Builder\Order\OrderId\RefuseRevertPatch;
use Cargomart\ApiClient\Builder\Order\OrderId\Repeat;
use Cargomart\ApiClient\Builder\Order\OrderId\Reuse;
use Cargomart\ApiClient\Builder\Order\OrderId\Roadmap;
use Cargomart\ApiClient\Builder\Order\OrderId\Save;
use Cargomart\ApiClient\Builder\Order\OrderId\Sign;
use Cargomart\ApiClient\Builder\Order\OrderId\SimpleDocument;
use Cargomart\ApiClient\Builder\Order\OrderId\Tag;
use Cargomart\ApiClient\Builder\Order\OrderId\TruckDriver;
use Cargomart\ApiClient\Builder\Order\OrderId\TruckDriverCorrection;
use Cargomart\ApiClient\Builder\Order\OrderId\TruckDriverPatch;
use Cargomart\ApiClient\Builder\Order\OrderId\Validate;
use Cargomart\ApiClient\Builder\Order\OrderId\Visitor;
use Cargomart\ApiClient\Builder\Order\OrderId\WaybillAdditionalInfo;
use Cargomart\ApiClient\Builder\Order\OrderId\WaybillTemplate;
use Cargomart\ApiClient\Builder\Order\OrderId\WaybillTemplateAdditionalData;
use Cargomart\ApiClient\Builder\Order\OrderId\WaybillTemplateGp;
use Cargomart\ApiClient\Builder\Order\OrderId\XClone;

/**
 * url: /api/v2/order/{orderId}
 */
final class OrderId extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}';

    public function expeditorPayment(): ExpeditorPayment
    {
        return new ExpeditorPayment($this->params, $this->client);
    }

    public function chat(): Chat
    {
        return new Chat($this->params, $this->client);
    }

    public function comment(): Comment
    {
        return new Comment($this->params, $this->client);
    }

    public function correction(): Correction
    {
        return new Correction($this->params, $this->client);
    }

    public function xClone(): XClone
    {
        return new XClone($this->params, $this->client);
    }

    public function save(): Save
    {
        return new Save($this->params, $this->client);
    }

    public function edit(): Edit
    {
        return new Edit($this->params, $this->client);
    }

    public function point(): Point
    {
        return new Point($this->params, $this->client);
    }

    public function clientAccess(): ClientAccess
    {
        return new ClientAccess($this->params, $this->client);
    }

    public function contact(): Contact
    {
        return new Contact($this->params, $this->client);
    }

    public function tag(): Tag
    {
        return new Tag($this->params, $this->client);
    }

    public function validate(): Validate
    {
        return new Validate($this->params, $this->client);
    }

    public function publish(): Publish
    {
        return new Publish($this->params, $this->client);
    }

    public function moderation(): Moderation
    {
        return new Moderation($this->params, $this->client);
    }

    public function moderationReject(): ModerationReject
    {
        return new ModerationReject($this->params, $this->client);
    }

    public function moderationApprove(): ModerationApprove
    {
        return new ModerationApprove($this->params, $this->client);
    }

    public function fixPrice(): FixPrice
    {
        return new FixPrice($this->params, $this->client);
    }

    public function sign(): Sign
    {
        return new Sign($this->params, $this->client);
    }

    public function carrierSign(): CarrierSign
    {
        return new CarrierSign($this->params, $this->client);
    }

    public function customerPatch(): CustomerPatch
    {
        return new CustomerPatch($this->params, $this->client);
    }

    public function refuseRevertPatch(): RefuseRevertPatch
    {
        return new RefuseRevertPatch($this->params, $this->client);
    }

    public function truckDriverPatch(): TruckDriverPatch
    {
        return new TruckDriverPatch($this->params, $this->client);
    }

    public function expeditorOffer(): ExpeditorOffer
    {
        return new ExpeditorOffer($this->params, $this->client);
    }

    public function roadmap(): Roadmap
    {
        return new Roadmap($this->params, $this->client);
    }

    public function carrierAsk(): CarrierAsk
    {
        return new CarrierAsk($this->params, $this->client);
    }

    public function carrierAskStat(): CarrierAskStat
    {
        return new CarrierAskStat($this->params, $this->client);
    }

    public function payment(): Payment
    {
        return new Payment($this->params, $this->client);
    }

    public function offer(): Offer
    {
        return new Offer($this->params, $this->client);
    }

    public function carrierRefuse(): CarrierRefuse
    {
        return new CarrierRefuse($this->params, $this->client);
    }

    public function consignorRefuse(): ConsignorRefuse
    {
        return new ConsignorRefuse($this->params, $this->client);
    }

    public function refuse(): Refuse
    {
        return new Refuse($this->params, $this->client);
    }

    public function refuseAppeal(): RefuseAppeal
    {
        return new RefuseAppeal($this->params, $this->client);
    }

    public function refuseCancel(): RefuseCancel
    {
        return new RefuseCancel($this->params, $this->client);
    }

    public function proposal(): Proposal
    {
        return new Proposal($this->params, $this->client);
    }

    public function proxy(): Proxy
    {
        return new Proxy($this->params, $this->client);
    }

    public function document(): Document
    {
        return new Document($this->params, $this->client);
    }

    public function consignorDocument(): ConsignorDocument
    {
        return new ConsignorDocument($this->params, $this->client);
    }

    public function truckDriver(): TruckDriver
    {
        return new TruckDriver($this->params, $this->client);
    }

    public function refreshTruck(): RefreshTruck
    {
        return new RefreshTruck($this->params, $this->client);
    }

    public function refreshDriver(): RefreshDriver
    {
        return new RefreshDriver($this->params, $this->client);
    }

    public function truckDriverCorrection(): TruckDriverCorrection
    {
        return new TruckDriverCorrection($this->params, $this->client);
    }

    public function proxyConsignorCarrier(): ProxyConsignorCarrier
    {
        return new ProxyConsignorCarrier($this->params, $this->client);
    }

    public function proxyConsignorCarrierSend(): ProxyConsignorCarrierSend
    {
        return new ProxyConsignorCarrierSend($this->params, $this->client);
    }

    public function proxyConsignorCarrierWithFacsimile(): ProxyConsignorCarrierWithFacsimile
    {
        return new ProxyConsignorCarrierWithFacsimile($this->params, $this->client);
    }

    public function proxyConsignorCarrierAdditionalInfo(): ProxyConsignorCarrierAdditionalInfo
    {
        return new ProxyConsignorCarrierAdditionalInfo($this->params, $this->client);
    }

    public function proxyConsignorAdditionalInfo(): ProxyConsignorAdditionalInfo
    {
        return new ProxyConsignorAdditionalInfo($this->params, $this->client);
    }

    public function proxyConsignorEmail(): ProxyConsignorEmail
    {
        return new ProxyConsignorEmail($this->params, $this->client);
    }

    public function proxyTemplate(): ProxyTemplate
    {
        return new ProxyTemplate($this->params, $this->client);
    }

    public function waybillTemplateAdditionalData(): WaybillTemplateAdditionalData
    {
        return new WaybillTemplateAdditionalData($this->params, $this->client);
    }

    public function waybillTemplate(): WaybillTemplate
    {
        return new WaybillTemplate($this->params, $this->client);
    }

    public function waybillAdditionalInfo(): WaybillAdditionalInfo
    {
        return new WaybillAdditionalInfo($this->params, $this->client);
    }

    public function waybillTemplateGp(): WaybillTemplateGp
    {
        return new WaybillTemplateGp($this->params, $this->client);
    }

    public function generalPartnerDocument(): GeneralPartnerDocument
    {
        return new GeneralPartnerDocument($this->params, $this->client);
    }

    public function generalPartnerTemplateApprove(): GeneralPartnerTemplateApprove
    {
        return new GeneralPartnerTemplateApprove($this->params, $this->client);
    }

    public function generalPartnerProxyTemplate(): GeneralPartnerProxyTemplate
    {
        return new GeneralPartnerProxyTemplate($this->params, $this->client);
    }

    public function generalPartnerProposalTemplate(): GeneralPartnerProposalTemplate
    {
        return new GeneralPartnerProposalTemplate($this->params, $this->client);
    }

    public function repeat(): Repeat
    {
        return new Repeat($this->params, $this->client);
    }

    public function reuse(): Reuse
    {
        return new Reuse($this->params, $this->client);
    }

    public function monitoring(): Monitoring
    {
        return new Monitoring($this->params, $this->client);
    }

    public function finish(): Finish
    {
        return new Finish($this->params, $this->client);
    }

    public function consignorContact(): ConsignorContact
    {
        return new ConsignorContact($this->params, $this->client);
    }

    public function carrierContact(): CarrierContact
    {
        return new CarrierContact($this->params, $this->client);
    }

    public function invoiceGpCarrier(): InvoiceGpCarrier
    {
        return new InvoiceGpCarrier($this->params, $this->client);
    }

    public function expeditorAssignment(): ExpeditorAssignment
    {
        return new ExpeditorAssignment($this->params, $this->client);
    }

    public function itinerary(): Itinerary
    {
        return new Itinerary($this->params, $this->client);
    }

    public function cancel(): Cancel
    {
        return new Cancel($this->params, $this->client);
    }

    public function pin(): Pin
    {
        return new Pin($this->params, $this->client);
    }

    public function bid(): Bid
    {
        return new Bid($this->params, $this->client);
    }

    public function broker(): Broker
    {
        return new Broker($this->params, $this->client);
    }

    public function afeerExpress(): AfeerExpress
    {
        return new AfeerExpress($this->params, $this->client);
    }

    public function visitor(): Visitor
    {
        return new Visitor($this->params, $this->client);
    }

    public function archive(): Archive
    {
        return new Archive($this->params, $this->client);
    }

    public function originalDocsTrackingNumber(): OriginalDocsTrackingNumber
    {
        return new OriginalDocsTrackingNumber($this->params, $this->client);
    }

    public function originalDocsAccept(): OriginalDocsAccept
    {
        return new OriginalDocsAccept($this->params, $this->client);
    }

    public function originalDocsReject(): OriginalDocsReject
    {
        return new OriginalDocsReject($this->params, $this->client);
    }

    public function simpleDocument(): SimpleDocument
    {
        return new SimpleDocument($this->params, $this->client);
    }

    public function checkDigitalEcnAccess(): CheckDigitalEcnAccess
    {
        return new CheckDigitalEcnAccess($this->params, $this->client);
    }

    public function ecn(): Ecn
    {
        return new Ecn($this->params, $this->client);
    }

    public function negotiate(): Negotiate
    {
        return new Negotiate($this->params, $this->client);
    }

    public function get(): OrderIdGet
    {
        return new OrderIdGet($this->client, $this->getUrl());
    }

    public function patch(): OrderIdPatch
    {
        return new OrderIdPatch($this->client, $this->getUrl());
    }

    public function delete(): OrderIdDelete
    {
        return new OrderIdDelete($this->client, $this->getUrl());
    }
}
