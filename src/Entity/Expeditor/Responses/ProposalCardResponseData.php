<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCardFull;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Данные заказа Экспедитора
 * source: expeditor/responses/proposal-card-response.json#/properties/data
 *
 * @property ProposalCardFull $proposal
 * @property Locality[] $locality
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 */
final class ProposalCardResponseData extends AbstractEntity
{
    protected static $types = [
        'proposal' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCardFull'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = ['proposal' => false, 'locality' => false, 'company' => false, 'contact' => false];
}
