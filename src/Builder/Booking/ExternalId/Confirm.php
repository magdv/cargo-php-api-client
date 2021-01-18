<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking\ExternalId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/booking/{externalId}/confirm
 */
final class Confirm extends AbstractBuilder
{
    protected const URL = '/api/v2/booking/{externalId}/confirm';

    public function post(): ConfirmPost
    {
        return new ConfirmPost($this->client, $this->getUrl());
    }
}
