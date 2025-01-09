<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractUpdates;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-contract-updates/additional-agreement-preview
 */
final class AdditionalAgreementPreview extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-updates/additional-agreement-preview';

    public function get(): AdditionalAgreementPreviewGet
    {
        return new AdditionalAgreementPreviewGet($this->client, $this->getUrl());
    }
}
