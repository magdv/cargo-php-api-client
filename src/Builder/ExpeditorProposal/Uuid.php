<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Uuid\DigitalActNonDeliveryCar;

/**
 * url: /api/v2/expeditor-proposal/{uuid}
 */
final class Uuid extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{uuid}';

    public function digitalActNonDeliveryCar(): DigitalActNonDeliveryCar
    {
        return new DigitalActNonDeliveryCar($this->params, $this->client);
    }
}
