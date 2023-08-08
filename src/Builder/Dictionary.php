<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Dictionary\Ac;
use Cargomart\ApiClient\Builder\Dictionary\ExpeditorBranch;

/**
 * url: /api/v2/dictionary
 */
final class Dictionary extends AbstractBuilder
{
    protected const URL = '/api/v2/dictionary';

    public function expeditorBranch(): ExpeditorBranch
    {
        return new ExpeditorBranch($this->params, $this->client);
    }

    public function ac(): Ac
    {
        return new Ac($this->params, $this->client);
    }

    public function get(): DictionaryGet
    {
        return new DictionaryGet($this->client, $this->getUrl());
    }
}
