<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/registration/{id}/confirm
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Registration\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/registration/{id}/confirm
 */
final class Confirm extends AbstractBuilder
{
    protected const URL = '/api/v2/registration/{id}/confirm';

    public function post(): ConfirmPost
    {
        return new ConfirmPost($this->client, $this->getUrl());
    }
}
