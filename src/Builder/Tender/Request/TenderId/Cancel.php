<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/tender/request/{tenderId}/cancel
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\TenderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/tender/request/{tenderId}/cancel
 */
final class Cancel extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/request/{tenderId}/cancel';

    public function post(): CancelPost
    {
        return new CancelPost($this->client, $this->getUrl());
    }
}
