<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/{hash}/document
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Company\Hash\Document\Id;

/**
 * url: /api/v2/company/{hash}/document
 */
final class Document extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/document';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): DocumentGet
    {
        return new DocumentGet($this->client, $this->getUrl());
    }
}
