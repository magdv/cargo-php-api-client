<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/simple-document
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\SimpleDocument\RootId;

/**
 * url: /api/v2/simple-document
 */
final class SimpleDocument extends AbstractBuilder
{
    protected const URL = '/api/v2/simple-document';

    public function rootId(string $rootId): RootId
    {
        $params = $this->params;
        $params['rootId'] = $rootId;
        return new RootId($params, $this->client);
    }
}
