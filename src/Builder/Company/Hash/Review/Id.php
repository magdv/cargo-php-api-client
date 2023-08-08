<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash\Review;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Company\Hash\Review\Id\Comment;

/**
 * url: /api/v2/company/{hash}/review/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/review/{id}';

    public function comment(): Comment
    {
        return new Comment($this->params, $this->client);
    }
}
