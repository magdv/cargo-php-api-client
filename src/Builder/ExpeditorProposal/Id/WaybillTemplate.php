<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/waybill-template
 */
final class WaybillTemplate extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/waybill-template';

    public function get(): WaybillTemplateGet
    {
        return new WaybillTemplateGet($this->client, $this->getUrl());
    }
}
