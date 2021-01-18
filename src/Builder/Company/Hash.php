<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Company\Hash\Branch;
use Cargomart\ApiClient\Builder\Company\Hash\CarPark;
use Cargomart\ApiClient\Builder\Company\Hash\CarriageDirection;
use Cargomart\ApiClient\Builder\Company\Hash\CarriageRegion;
use Cargomart\ApiClient\Builder\Company\Hash\CommunicationContacts;
use Cargomart\ApiClient\Builder\Company\Hash\Disabled;
use Cargomart\ApiClient\Builder\Company\Hash\Document;
use Cargomart\ApiClient\Builder\Company\Hash\KonturReport;
use Cargomart\ApiClient\Builder\Company\Hash\Logo;
use Cargomart\ApiClient\Builder\Company\Hash\PartnerAccept;
use Cargomart\ApiClient\Builder\Company\Hash\PartnerConditions;
use Cargomart\ApiClient\Builder\Company\Hash\PartnerContract;
use Cargomart\ApiClient\Builder\Company\Hash\PartnerDelete;
use Cargomart\ApiClient\Builder\Company\Hash\PartnerInvite;
use Cargomart\ApiClient\Builder\Company\Hash\PartnerMessage;
use Cargomart\ApiClient\Builder\Company\Hash\PartnerReject;
use Cargomart\ApiClient\Builder\Company\Hash\Requirement;
use Cargomart\ApiClient\Builder\Company\Hash\Review;
use Cargomart\ApiClient\Builder\Company\Hash\Settings;

/**
 * url: /api/v2/company/{hash}
 */
final class Hash extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}';

    public function document(): Document
    {
        return new Document($this->params, $this->client);
    }

    public function partnerInvite(): PartnerInvite
    {
        return new PartnerInvite($this->params, $this->client);
    }

    public function partnerAccept(): PartnerAccept
    {
        return new PartnerAccept($this->params, $this->client);
    }

    public function partnerReject(): PartnerReject
    {
        return new PartnerReject($this->params, $this->client);
    }

    public function partnerDelete(): PartnerDelete
    {
        return new PartnerDelete($this->params, $this->client);
    }

    public function partnerContract(): PartnerContract
    {
        return new PartnerContract($this->params, $this->client);
    }

    public function partnerMessage(): PartnerMessage
    {
        return new PartnerMessage($this->params, $this->client);
    }

    public function partnerConditions(): PartnerConditions
    {
        return new PartnerConditions($this->params, $this->client);
    }

    public function communicationContacts(): CommunicationContacts
    {
        return new CommunicationContacts($this->params, $this->client);
    }

    public function disabled(): Disabled
    {
        return new Disabled($this->params, $this->client);
    }

    public function branch(): Branch
    {
        return new Branch($this->params, $this->client);
    }

    public function konturReport(): KonturReport
    {
        return new KonturReport($this->params, $this->client);
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

    public function review(): Review
    {
        return new Review($this->params, $this->client);
    }

    public function get(): HashGet
    {
        return new HashGet($this->client, $this->getUrl());
    }

    public function put(): HashPut
    {
        return new HashPut($this->client, $this->getUrl());
    }

    public function patch(): HashPatch
    {
        return new HashPatch($this->client, $this->getUrl());
    }
}
