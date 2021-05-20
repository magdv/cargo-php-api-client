<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ShortListItem;

/**
 * Proposal list response data
 * source: expeditor/responses/proposal-list-response.json#/properties/data
 *
 * @property ShortListItem[] $proposal
 * @property Pagination $pagination
 */
final class ProposalListResponseData extends AbstractEntity
{
    protected static $types = [
        'proposal' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ShortListItem'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['proposal' => false, 'pagination' => false];
}
