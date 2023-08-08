<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash\Review\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/review/{id}/comment
 */
final class Comment extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/review/{id}/comment';

    public function get(): CommentGet
    {
        return new CommentGet($this->client, $this->getUrl());
    }

    public function post(): CommentPost
    {
        return new CommentPost($this->client, $this->getUrl());
    }
}
