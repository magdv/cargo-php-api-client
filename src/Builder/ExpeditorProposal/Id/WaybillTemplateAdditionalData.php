<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/waybill-template-additional-data
 */
final class WaybillTemplateAdditionalData extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/waybill-template-additional-data';

    public function get(): WaybillTemplateAdditionalDataGet
    {
        return new WaybillTemplateAdditionalDataGet($this->client, $this->getUrl());
    }

    public function post(): WaybillTemplateAdditionalDataPost
    {
        return new WaybillTemplateAdditionalDataPost($this->client, $this->getUrl());
    }
}
