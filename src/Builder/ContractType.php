<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ContractType\Id;

/**
 * url: /api/v2/contract-type
 */
final class ContractType extends AbstractBuilder
{
    protected const URL = '/api/v2/contract-type';

    public function id(int $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): ContractTypeGet
    {
        return new ContractTypeGet($this->client, $this->getUrl());
    }

    public function post(): ContractTypePost
    {
        return new ContractTypePost($this->client, $this->getUrl());
    }
}
