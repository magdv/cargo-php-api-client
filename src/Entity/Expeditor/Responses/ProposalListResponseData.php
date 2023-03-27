<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/proposal-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ShortListItem;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;

/**
 * Proposal list response data
 * source: expeditor/responses/proposal-list-response.json#/properties/data
 *
 * @property ShortListItem[] $proposal
 * @property Locality[] $locality
 * @property CompanyShort[] $company
 * @property Pagination $pagination
 */
final class ProposalListResponseData extends AbstractEntity
{
    protected static $types = [
        'proposal' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ShortListItem'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['proposal' => false, 'locality' => false, 'company' => false, 'pagination' => false];
}
