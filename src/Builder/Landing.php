<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/landing
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Landing\SendEmail;

/**
 * url: /api/v2/landing
 */
final class Landing extends AbstractBuilder
{
    protected const URL = '/api/v2/landing';

    public function sendEmail(): SendEmail
    {
        return new SendEmail($this->params, $this->client);
    }
}
