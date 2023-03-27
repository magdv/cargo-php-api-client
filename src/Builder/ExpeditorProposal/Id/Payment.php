<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/payment
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/payment
 */
final class Payment extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/payment';

    public function get(): PaymentGet
    {
        return new PaymentGet($this->client, $this->getUrl());
    }
}
