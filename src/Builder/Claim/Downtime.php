<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Claim;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Claim\Downtime\Id;

/**
 * url: /api/v2/claim/downtime
 */
final class Downtime extends AbstractBuilder
{
    protected const URL = '/api/v2/claim/downtime';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }
}
