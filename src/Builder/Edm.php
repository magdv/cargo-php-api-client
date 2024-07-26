<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Edm\DiadocBoxList;

/**
 * url: /api/v2/edm
 */
final class Edm extends AbstractBuilder
{
    protected const URL = '/api/v2/edm';

    public function diadocBoxList(): DiadocBoxList
    {
        return new DiadocBoxList($this->params, $this->client);
    }
}
