<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/{hash}/settings
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/settings
 */
final class Settings extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/settings';

    public function get(): SettingsGet
    {
        return new SettingsGet($this->client, $this->getUrl());
    }

    public function patch(): SettingsPatch
    {
        return new SettingsPatch($this->client, $this->getUrl());
    }
}
