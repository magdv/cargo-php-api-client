<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Tender\Draft;
use Cargomart\ApiClient\Builder\Tender\Request;

/**
 * url: /api/v2/tender
 */
final class Tender extends AbstractBuilder
{
    protected const URL = '/api/v2/tender';

    public function draft(): Draft
    {
        return new Draft($this->params, $this->client);
    }

    public function request(): Request
    {
        return new Request($this->params, $this->client);
    }
}
