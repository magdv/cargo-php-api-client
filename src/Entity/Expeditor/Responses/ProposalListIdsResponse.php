<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список id заказов Экспедитора
 * source: expeditor/responses/proposal-list-ids-response.json
 *
 * @property ProposalListIdsResponseData $data
 */
final class ProposalListIdsResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalListIdsResponseData']];
    protected static $nullables = ['data' => false];
}
