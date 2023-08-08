<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-draft-expeditor/step-bid
 */
final class StepBid extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-expeditor/step-bid';

    public function get(): StepBidGet
    {
        return new StepBidGet($this->client, $this->getUrl());
    }
}
