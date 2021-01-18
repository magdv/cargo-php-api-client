<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage\PreOrder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Manage\PreOrder\Id\Cancel;

/**
 * url: /api/v2/manage/pre-order/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/manage/pre-order/{id}';

    public function cancel(): Cancel
    {
        return new Cancel($this->params, $this->client);
    }
}
