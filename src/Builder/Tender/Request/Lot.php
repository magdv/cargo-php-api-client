<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Tender\Request\Lot\LotId;

/**
 * url: /api/v2/tender/request/lot
 */
final class Lot extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/request/lot';

    public function lotId(string $lotId): LotId
    {
        $params = $this->params;
        $params['lotId'] = $lotId;
        return new LotId($params, $this->client);
    }

    public function get(): LotGet
    {
        return new LotGet($this->client, $this->getUrl());
    }
}
