<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorContractUpdates\AdditionalAgreementPreview;
use Cargomart\ApiClient\Builder\ExpeditorContractUpdates\Cancel;
use Cargomart\ApiClient\Builder\ExpeditorContractUpdates\CommercialConditions;
use Cargomart\ApiClient\Builder\ExpeditorContractUpdates\Sign;
use Cargomart\ApiClient\Builder\ExpeditorContractUpdates\Signer;

/**
 * url: /api/v2/expeditor-contract-updates
 */
final class ExpeditorContractUpdates extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-updates';

    public function commercialConditions(): CommercialConditions
    {
        return new CommercialConditions($this->params, $this->client);
    }

    public function signer(): Signer
    {
        return new Signer($this->params, $this->client);
    }

    public function sign(): Sign
    {
        return new Sign($this->params, $this->client);
    }

    public function cancel(): Cancel
    {
        return new Cancel($this->params, $this->client);
    }

    public function additionalAgreementPreview(): AdditionalAgreementPreview
    {
        return new AdditionalAgreementPreview($this->params, $this->client);
    }

    public function get(): ExpeditorContractUpdatesGet
    {
        return new ExpeditorContractUpdatesGet($this->client, $this->getUrl());
    }

    public function post(): ExpeditorContractUpdatesPost
    {
        return new ExpeditorContractUpdatesPost($this->client, $this->getUrl());
    }
}
