<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\OrderDraftExpeditor\Conditions;
use Cargomart\ApiClient\Builder\OrderDraftExpeditor\DraftId;
use Cargomart\ApiClient\Builder\OrderDraftExpeditor\Price;
use Cargomart\ApiClient\Builder\OrderDraftExpeditor\PriceV2;
use Cargomart\ApiClient\Builder\OrderDraftExpeditor\StepBid;
use Cargomart\ApiClient\Builder\OrderDraftExpeditor\Validate;

/**
 * url: /api/v2/order-draft-expeditor
 */
final class OrderDraftExpeditor extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-expeditor';

    public function draftId(string $draftId): DraftId
    {
        $params = $this->params;
        $params['draftId'] = $draftId;
        return new DraftId($params, $this->client);
    }

    public function validate(): Validate
    {
        return new Validate($this->params, $this->client);
    }

    public function conditions(): Conditions
    {
        return new Conditions($this->params, $this->client);
    }

    public function priceV2(): PriceV2
    {
        return new PriceV2($this->params, $this->client);
    }

    public function price(): Price
    {
        return new Price($this->params, $this->client);
    }

    public function stepBid(): StepBid
    {
        return new StepBid($this->params, $this->client);
    }

    public function post(): OrderDraftExpeditorPost
    {
        return new OrderDraftExpeditorPost($this->client, $this->getUrl());
    }
}
