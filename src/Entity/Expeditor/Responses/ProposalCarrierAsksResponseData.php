<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/proposal-carrier-asks-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCarrierAsk;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: expeditor/responses/proposal-carrier-asks-response.json#/properties/data
 *
 * @property ProposalCarrierAsk[] $carrierAsks
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 */
final class ProposalCarrierAsksResponseData extends AbstractEntity
{
    protected static $types = [
        'carrierAsks' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCarrierAsk'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = ['carrierAsks' => false, 'company' => false, 'contact' => false];
}
