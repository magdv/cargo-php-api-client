<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/landing/send-email
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Landing;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/landing/send-email
 */
final class SendEmail extends AbstractBuilder
{
    protected const URL = '/api/v2/landing/send-email';

    public function post(): SendEmailPost
    {
        return new SendEmailPost($this->client, $this->getUrl());
    }
}
