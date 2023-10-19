<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\OrderDraftFtl\DraftId;
use Cargomart\ApiClient\Builder\OrderDraftFtl\StepBid;
use Cargomart\ApiClient\Builder\OrderDraftFtl\Validate;

/**
 * url: /api/v2/order-draft-ftl
 */
final class OrderDraftFtl extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-ftl';

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

    public function stepBid(): StepBid
    {
        return new StepBid($this->params, $this->client);
    }

    public function post(): OrderDraftFtlPost
    {
        return new OrderDraftFtlPost($this->client, $this->getUrl());
    }
}
