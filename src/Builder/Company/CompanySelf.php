<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/self
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Company\Self\CarPark;
use Cargomart\ApiClient\Builder\Company\Self\CarriageDirection;
use Cargomart\ApiClient\Builder\Company\Self\CarriageRegion;
use Cargomart\ApiClient\Builder\Company\Self\CarrierCount;
use Cargomart\ApiClient\Builder\Company\Self\CommunicationContacts;
use Cargomart\ApiClient\Builder\Company\Self\ExpeditorContract;
use Cargomart\ApiClient\Builder\Company\Self\Logo;
use Cargomart\ApiClient\Builder\Company\Self\PartnerConditions;
use Cargomart\ApiClient\Builder\Company\Self\Requirement;
use Cargomart\ApiClient\Builder\Company\Self\Settings;

/**
 * url: /api/v2/company/self
 */
final class CompanySelf extends AbstractBuilder
{
    protected const URL = '/api/v2/company/self';

    public function partnerConditions(): PartnerConditions
    {
        return new PartnerConditions($this->params, $this->client);
    }

    public function communicationContacts(): CommunicationContacts
    {
        return new CommunicationContacts($this->params, $this->client);
    }

    public function carrierCount(): CarrierCount
    {
        return new CarrierCount($this->params, $this->client);
    }

    public function logo(): Logo
    {
        return new Logo($this->params, $this->client);
    }

    public function settings(): Settings
    {
        return new Settings($this->params, $this->client);
    }

    public function carriageDirection(): CarriageDirection
    {
        return new CarriageDirection($this->params, $this->client);
    }

    public function carriageRegion(): CarriageRegion
    {
        return new CarriageRegion($this->params, $this->client);
    }

    public function requirement(): Requirement
    {
        return new Requirement($this->params, $this->client);
    }

    public function carPark(): CarPark
    {
        return new CarPark($this->params, $this->client);
    }

    public function expeditorContract(): ExpeditorContract
    {
        return new ExpeditorContract($this->params, $this->client);
    }

    public function get(): CompanySelfGet
    {
        return new CompanySelfGet($this->client, $this->getUrl());
    }

    public function put(): CompanySelfPut
    {
        return new CompanySelfPut($this->client, $this->getUrl());
    }

    public function patch(): CompanySelfPatch
    {
        return new CompanySelfPatch($this->client, $this->getUrl());
    }
}
