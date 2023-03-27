<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/worker/{id}/contact-complain
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/worker/{id}/contact-complain
 */
final class ContactComplain extends AbstractBuilder
{
    protected const URL = '/api/v2/worker/{id}/contact-complain';

    public function post(): ContactComplainPost
    {
        return new ContactComplainPost($this->client, $this->getUrl());
    }
}
