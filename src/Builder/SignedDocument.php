<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\SignedDocument\Id;

/**
 * url: /api/v2/signed-document
 */
final class SignedDocument extends AbstractBuilder
{
    protected const URL = '/api/v2/signed-document';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }
}
