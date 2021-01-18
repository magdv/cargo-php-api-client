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

    public function tender(): Tender
    {
        return new Tender($this->params, $this->client);
    }

    public function configuration(): Configuration
    {
        return new Configuration($this->params, $this->client);
    }

    public function itinerary(): Itinerary
    {
        return new Itinerary($this->params, $this->client);
    }

    public function driverApp(): DriverApp
    {
        return new DriverApp($this->params, $this->client);
    }

    public function company(): Company
    {
        return new Company($this->params, $this->client);
    }

    public function device(): Device
    {
        return new Device($this->params, $this->client);
    }

    public function setting(): Setting
    {
        return new Setting($this->params, $this->client);
    }

    public function chat(): Chat
    {
        return new Chat($this->params, $this->client);
    }

    public function info(): Info
    {
        return new Info($this->params, $this->client);
    }

    public function manage(): Manage
    {
        return new Manage($this->params, $this->client);
    }

    public function contractType(): ContractType
    {
        return new ContractType($this->params, $this->client);
    }

    public function registration(): Registration
    {
        return new Registration($this->params, $this->client);
    }

    public function user(): User
    {
        return new User($this->params, $this->client);
    }

    public function storagePoint(): StoragePoint
    {
        return new StoragePoint($this->params, $this->client);
    }

    public function ac(): Ac
    {
        return new Ac($this->params, $this->client);
    }

    public function metrics(): Metrics
    {
        return new Metrics($this->params, $this->client);
    }

    public function rate(): Rate
    {
        return new Rate($this->params, $this->client);
    }

    public function candidate(): Candidate
    {
        return new Candidate($this->params, $this->client);
    }

    public function preOrder(): PreOrder
    {
        return new PreOrder($this->params, $this->client);
    }

    public function preOrderGroup(): PreOrderGroup
    {
        return new PreOrderGroup($this->params, $this->client);
    }

    public function trailer(): Trailer
    {
        return new Trailer($this->params, $this->client);
    }

    public function locality(): Locality
    {
        return new Locality($this->params, $this->client);
    }

    public function companyConfirmation(): CompanyConfirmation
    {
        return new CompanyConfirmation($this->params, $this->client);
    }

    public function order(): Order
    {
        return new Order($this->params, $this->client);
    }

    public function tracking(): Tracking
    {
        return new Tracking($this->params, $this->client);
    }

    public function orderSearch(): OrderSearch
    {
        return new OrderSearch($this->params, $this->client);
    }

    public function orderDraftFtl(): OrderDraftFtl
    {
        return new OrderDraftFtl($this->params, $this->client);
    }

    public function driver(): Driver
    {
        return new Driver($this->params, $this->client);
    }

    public function message(): Message
    {
        return new Message($this->params, $this->client);
    }

    public function worker(): Worker
    {
        return new Worker($this->params, $this->client);
    }

    public function tms(): Tms
    {
        return new Tms($this->params, $this->client);
    }

    public function booking(): Booking
    {
        return new Booking($this->params, $this->client);
    }
}
