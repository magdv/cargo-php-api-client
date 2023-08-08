<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Bid;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\CarrierAsk;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\CarrierPayment;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Chat;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\ConsignorExpeditorPayment;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\DenyBankingDetails;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Ecn;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\ExpeditorOffer;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Patch;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Payment;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Pin;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Refuse;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\RefuseCarrier;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Roadmap;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\RoutePath;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\SimpleDocument;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\SimpleDocuments;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Visitor;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\WaybillTemplate;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\WaybillTemplateAdditionalData;

/**
 * url: /api/v2/expeditor-proposal/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}';

    public function patch(): Patch
    {
        return new Patch($this->params, $this->client);
    }

    public function refuseCarrier(): RefuseCarrier
    {
        return new RefuseCarrier($this->params, $this->client);
    }

    public function refuse(): Refuse
    {
        return new Refuse($this->params, $this->client);
    }

    public function routePath(): RoutePath
    {
        return new RoutePath($this->params, $this->client);
    }

    public function simpleDocuments(): SimpleDocuments
    {
        return new SimpleDocuments($this->params, $this->client);
    }

    public function visitor(): Visitor
    {
        return new Visitor($this->params, $this->client);
    }

    public function pin(): Pin
    {
        return new Pin($this->params, $this->client);
    }

    public function denyBankingDetails(): DenyBankingDetails
    {
        return new DenyBankingDetails($this->params, $this->client);
    }

    public function expeditorOffer(): ExpeditorOffer
    {
        return new ExpeditorOffer($this->params, $this->client);
    }

    public function bid(): Bid
    {
        return new Bid($this->params, $this->client);
    }

    public function waybillTemplateAdditionalData(): WaybillTemplateAdditionalData
    {
        return new WaybillTemplateAdditionalData($this->params, $this->client);
    }

    public function ecn(): Ecn
    {
        return new Ecn($this->params, $this->client);
    }

    public function waybillTemplate(): WaybillTemplate
    {
        return new WaybillTemplate($this->params, $this->client);
    }

    public function roadmap(): Roadmap
    {
        return new Roadmap($this->params, $this->client);
    }

    public function chat(): Chat
    {
        return new Chat($this->params, $this->client);
    }

    public function proxy(): Proxy
    {
        return new Proxy($this->params, $this->client);
    }

    public function carrierPayment(): CarrierPayment
    {
        return new CarrierPayment($this->params, $this->client);
    }

    public function payment(): Payment
    {
        return new Payment($this->params, $this->client);
    }

    public function consignorExpeditorPayment(): ConsignorExpeditorPayment
    {
        return new ConsignorExpeditorPayment($this->params, $this->client);
    }

    public function carrierAsk(): CarrierAsk
    {
        return new CarrierAsk($this->params, $this->client);
    }

    public function simpleDocument(): SimpleDocument
    {
        return new SimpleDocument($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}
