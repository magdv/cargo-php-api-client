<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalExpeditorOffer;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: expeditor/responses/proposal-offers-list-response.json#/properties/data
 *
 * @property ProposalExpeditorOffer[] $expeditorOffers
 * @property UserContactShort[] $contact
 * @property CompanyShort[] $company
 */
final class ProposalOffersListResponseData extends AbstractEntity
{
    protected static $types = [
        'expeditorOffers' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalExpeditorOffer'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
    ];

    protected static $nullables = ['expeditorOffers' => false, 'contact' => false, 'company' => false];
}
