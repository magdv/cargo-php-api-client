<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/consignor-expeditor-payment
 */
final class ConsignorExpeditorPayment extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/consignor-expeditor-payment';

    public function put(): ConsignorExpeditorPaymentPut
    {
        return new ConsignorExpeditorPaymentPut($this->client, $this->getUrl());
    }
}
