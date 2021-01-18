<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Tender\Request\Lot;
use Cargomart\ApiClient\Builder\Tender\Request\TenderId;

/**
 * url: /api/v2/tender/request
 */
final class Request extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/request';

    public function tenderId(string $tenderId): TenderId
    {
        $params = $this->params;
        $params['tenderId'] = $tenderId;
        return new TenderId($params, $this->client);
    }

    public function lot(): Lot
    {
        return new Lot($this->params, $this->client);
    }

    public function get(): RequestGet
    {
        return new RequestGet($this->client, $this->getUrl());
    }
}
