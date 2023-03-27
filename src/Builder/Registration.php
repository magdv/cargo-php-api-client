<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/registration
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Registration\Id;

/**
 * url: /api/v2/registration
 */
final class Registration extends AbstractBuilder
{
    protected const URL = '/api/v2/registration';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function post(): RegistrationPost
    {
        return new RegistrationPost($this->client, $this->getUrl());
    }
}
