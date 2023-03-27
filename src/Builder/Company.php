<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Company\Branch;
use Cargomart\ApiClient\Builder\Company\CompanySelf;
use Cargomart\ApiClient\Builder\Company\Hash;
use Cargomart\ApiClient\Builder\Company\Locality;

/**
 * url: /api/v2/company
 */
final class Company extends AbstractBuilder
{
    protected const URL = '/api/v2/company';

    public function hash(string $hash): Hash
    {
        $params = $this->params;
        $params['hash'] = $hash;
        return new Hash($params, $this->client);
    }

    public function companySelf(): CompanySelf
    {
        return new CompanySelf($this->params, $this->client);
    }

    public function locality(): Locality
    {
        return new Locality($this->params, $this->client);
    }

    public function branch(): Branch
    {
        return new Branch($this->params, $this->client);
    }

    public function get(): CompanyGet
    {
        return new CompanyGet($this->client, $this->getUrl());
    }
}
