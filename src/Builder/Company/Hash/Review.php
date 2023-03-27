<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/{hash}/review
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Company\Hash\Review\Id;

/**
 * url: /api/v2/company/{hash}/review
 */
final class Review extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/review';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): ReviewGet
    {
        return new ReviewGet($this->client, $this->getUrl());
    }

    public function post(): ReviewPost
    {
        return new ReviewPost($this->client, $this->getUrl());
    }
}
