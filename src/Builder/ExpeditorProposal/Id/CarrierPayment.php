<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/carrier-payment
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/carrier-payment
 */
final class CarrierPayment extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/carrier-payment';

    public function get(): CarrierPaymentGet
    {
        return new CarrierPaymentGet($this->client, $this->getUrl());
    }

    public function put(): CarrierPaymentPut
    {
        return new CarrierPaymentPut($this->client, $this->getUrl());
    }
}
