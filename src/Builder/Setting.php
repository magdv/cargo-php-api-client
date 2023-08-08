<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Setting\Name;

/**
 * url: /api/v2/setting
 */
final class Setting extends AbstractBuilder
{
    protected const URL = '/api/v2/setting';

    public function name(string $name): Name
    {
        $params = $this->params;
        $params['name'] = $name;
        return new Name($params, $this->client);
    }

    public function get(): SettingGet
    {
        return new SettingGet($this->client, $this->getUrl());
    }
}
