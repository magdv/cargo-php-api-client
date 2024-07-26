<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Edm;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/edm/diadoc-box-list
 */
final class DiadocBoxList extends AbstractBuilder
{
    protected const URL = '/api/v2/edm/diadoc-box-list';

    public function get(): DiadocBoxListGet
    {
        return new DiadocBoxListGet($this->client, $this->getUrl());
    }
}
