<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Tms\Reception;

/**
 * url: /api/v2/tms
 */
final class Tms extends AbstractBuilder
{
    protected const URL = '/api/v2/tms';

    public function reception(): Reception
    {
        return new Reception($this->params, $this->client);
    }
}
