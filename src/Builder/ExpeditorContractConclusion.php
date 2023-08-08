<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorContractConclusion\ContractInfo;
use Cargomart\ApiClient\Builder\ExpeditorContractConclusion\IssueCertificate;
use Cargomart\ApiClient\Builder\ExpeditorContractConclusion\IssueCertificatePhone;
use Cargomart\ApiClient\Builder\ExpeditorContractConclusion\IssueCertificatePhoneConfirm;
use Cargomart\ApiClient\Builder\ExpeditorContractConclusion\KonturDataApprove;
use Cargomart\ApiClient\Builder\ExpeditorContractConclusion\Signer;
use Cargomart\ApiClient\Builder\ExpeditorContractConclusion\SigningMethod;
use Cargomart\ApiClient\Builder\ExpeditorContractConclusion\Status;

/**
 * url: /api/v2/expeditor-contract-conclusion
 */
final class ExpeditorContractConclusion extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-conclusion';

    public function status(): Status
    {
        return new Status($this->params, $this->client);
    }

    public function konturDataApprove(): KonturDataApprove
    {
        return new KonturDataApprove($this->params, $this->client);
    }

    public function contractInfo(): ContractInfo
    {
        return new ContractInfo($this->params, $this->client);
    }

    public function signer(): Signer
    {
        return new Signer($this->params, $this->client);
    }

    public function issueCertificate(): IssueCertificate
    {
        return new IssueCertificate($this->params, $this->client);
    }

    public function issueCertificatePhone(): IssueCertificatePhone
    {
        return new IssueCertificatePhone($this->params, $this->client);
    }

    public function issueCertificatePhoneConfirm(): IssueCertificatePhoneConfirm
    {
        return new IssueCertificatePhoneConfirm($this->params, $this->client);
    }

    public function signingMethod(): SigningMethod
    {
        return new SigningMethod($this->params, $this->client);
    }

    public function get(): ExpeditorContractConclusionGet
    {
        return new ExpeditorContractConclusionGet($this->client, $this->getUrl());
    }

    public function post(): ExpeditorContractConclusionPost
    {
        return new ExpeditorContractConclusionPost($this->client, $this->getUrl());
    }

    public function delete(): ExpeditorContractConclusionDelete
    {
        return new ExpeditorContractConclusionDelete($this->client, $this->getUrl());
    }
}
