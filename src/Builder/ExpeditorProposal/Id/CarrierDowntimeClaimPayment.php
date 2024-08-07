<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-payment
 */
final class CarrierDowntimeClaimPayment extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/carrier-downtime-claim-payment';

    public function put(): CarrierDowntimeClaimPaymentPut
    {
        return new CarrierDowntimeClaimPaymentPut($this->client, $this->getUrl());
    }
}
