<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2
 */
final class ApiV2 extends AbstractBuilder
{
    protected const URL = '/api/v2';

    public function setting(): Setting
    {
        return new Setting($this->params, $this->client);
    }

    public function driverApp(): DriverApp
    {
        return new DriverApp($this->params, $this->client);
    }

    public function order(): Order
    {
        return new Order($this->params, $this->client);
    }

    public function orderEcn(): OrderEcn
    {
        return new OrderEcn($this->params, $this->client);
    }

    public function orderSearch(): OrderSearch
    {
        return new OrderSearch($this->params, $this->client);
    }

    public function truckOrderSearch(): TruckOrderSearch
    {
        return new TruckOrderSearch($this->params, $this->client);
    }

    public function truckOrderQueue(): TruckOrderQueue
    {
        return new TruckOrderQueue($this->params, $this->client);
    }

    public function orderPatch(): OrderPatch
    {
        return new OrderPatch($this->params, $this->client);
    }

    public function tracking(): Tracking
    {
        return new Tracking($this->params, $this->client);
    }

    public function roadmap(): Roadmap
    {
        return new Roadmap($this->params, $this->client);
    }

    public function orderDocumentPackage(): OrderDocumentPackage
    {
        return new OrderDocumentPackage($this->params, $this->client);
    }

    public function orderDocument(): OrderDocument
    {
        return new OrderDocument($this->params, $this->client);
    }

    public function orderDraftFtl(): OrderDraftFtl
    {
        return new OrderDraftFtl($this->params, $this->client);
    }

    public function orderDraftExpeditor(): OrderDraftExpeditor
    {
        return new OrderDraftExpeditor($this->params, $this->client);
    }

    public function ws(): Ws
    {
        return new Ws($this->params, $this->client);
    }

    public function info(): Info
    {
        return new Info($this->params, $this->client);
    }

    public function driver(): Driver
    {
        return new Driver($this->params, $this->client);
    }

    public function message(): Message
    {
        return new Message($this->params, $this->client);
    }

    public function file(): File
    {
        return new File($this->params, $this->client);
    }

    public function upload(): Upload
    {
        return new Upload($this->params, $this->client);
    }

    public function candidate(): Candidate
    {
        return new Candidate($this->params, $this->client);
    }

    public function expeditorContractConclusion(): ExpeditorContractConclusion
    {
        return new ExpeditorContractConclusion($this->params, $this->client);
    }

    public function configuration(): Configuration
    {
        return new Configuration($this->params, $this->client);
    }

    public function landing(): Landing
    {
        return new Landing($this->params, $this->client);
    }

    public function truck(): Truck
    {
        return new Truck($this->params, $this->client);
    }

    public function device(): Device
    {
        return new Device($this->params, $this->client);
    }

    public function tender(): Tender
    {
        return new Tender($this->params, $this->client);
    }

    public function expeditorCarrierContract(): ExpeditorCarrierContract
    {
        return new ExpeditorCarrierContract($this->params, $this->client);
    }

    public function userCertificate(): UserCertificate
    {
        return new UserCertificate($this->params, $this->client);
    }

    public function storagePoint(): StoragePoint
    {
        return new StoragePoint($this->params, $this->client);
    }

    public function ac(): Ac
    {
        return new Ac($this->params, $this->client);
    }

    public function worker(): Worker
    {
        return new Worker($this->params, $this->client);
    }

    public function orderRefuseReason(): OrderRefuseReason
    {
        return new OrderRefuseReason($this->params, $this->client);
    }

    public function priceType(): PriceType
    {
        return new PriceType($this->params, $this->client);
    }

    public function dictionary(): Dictionary
    {
        return new Dictionary($this->params, $this->client);
    }

    public function expeditorProposal(): ExpeditorProposal
    {
        return new ExpeditorProposal($this->params, $this->client);
    }

    public function expeditor(): Expeditor
    {
        return new Expeditor($this->params, $this->client);
    }

    public function expeditorEcn(): ExpeditorEcn
    {
        return new ExpeditorEcn($this->params, $this->client);
    }

    public function itinerary(): Itinerary
    {
        return new Itinerary($this->params, $this->client);
    }

    public function simpleDocument(): SimpleDocument
    {
        return new SimpleDocument($this->params, $this->client);
    }

    public function user(): User
    {
        return new User($this->params, $this->client);
    }

    public function trailer(): Trailer
    {
        return new Trailer($this->params, $this->client);
    }

    public function predictor(): Predictor
    {
        return new Predictor($this->params, $this->client);
    }

    public function locality(): Locality
    {
        return new Locality($this->params, $this->client);
    }

    public function metrics(): Metrics
    {
        return new Metrics($this->params, $this->client);
    }

    public function companyBranchHighlighted(): CompanyBranchHighlighted
    {
        return new CompanyBranchHighlighted($this->params, $this->client);
    }

    public function company(): Company
    {
        return new Company($this->params, $this->client);
    }

    public function tms(): Tms
    {
        return new Tms($this->params, $this->client);
    }

    public function booking(): Booking
    {
        return new Booking($this->params, $this->client);
    }

    public function productionCalendar(): ProductionCalendar
    {
        return new ProductionCalendar($this->params, $this->client);
    }

    public function registration(): Registration
    {
        return new Registration($this->params, $this->client);
    }

    public function contractType(): ContractType
    {
        return new ContractType($this->params, $this->client);
    }

    public function auth(): Auth
    {
        return new Auth($this->params, $this->client);
    }

    public function companyConfirmation(): CompanyConfirmation
    {
        return new CompanyConfirmation($this->params, $this->client);
    }

    public function chat(): Chat
    {
        return new Chat($this->params, $this->client);
    }

    public function search(): Search
    {
        return new Search($this->params, $this->client);
    }
}
