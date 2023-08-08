<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/self/settings
 */
final class Settings extends AbstractBuilder
{
    protected const URL = '/api/v2/company/self/settings';

    public function get(): SettingsGet
    {
        return new SettingsGet($this->client, $this->getUrl());
    }

    public function patch(): SettingsPatch
    {
        return new SettingsPatch($this->client, $this->getUrl());
    }
}
