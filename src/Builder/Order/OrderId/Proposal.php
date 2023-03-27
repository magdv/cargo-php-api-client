<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/proposal
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/proposal
 */
final class Proposal extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/proposal';

    public function get(): ProposalGet
    {
        return new ProposalGet($this->client, $this->getUrl());
    }
}
