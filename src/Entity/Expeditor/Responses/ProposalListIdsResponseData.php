<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/proposal-list-ids-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;

/**
 * Proposal ids list response data
 * source: expeditor/responses/proposal-list-ids-response.json#/properties/data
 *
 * @property string[] $proposal
 * @property Pagination $pagination
 */
final class ProposalListIdsResponseData extends AbstractEntity
{
    protected static $types = [
        'proposal' => ['array', 'string'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['proposal' => false, 'pagination' => false];
}
