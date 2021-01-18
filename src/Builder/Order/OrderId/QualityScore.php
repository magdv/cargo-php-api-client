<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/quality-score
 */
final class QualityScore extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/quality-score';

    public function get(): QualityScoreGet
    {
        return new QualityScoreGet($this->client, $this->getUrl());
    }

    public function post(): QualityScorePost
    {
        return new QualityScorePost($this->client, $this->getUrl());
    }
}
