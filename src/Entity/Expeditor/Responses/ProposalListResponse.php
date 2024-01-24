<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список заказов Экспедитора
 * source: expeditor/responses/proposal-list-response.json
 *
 * @property ProposalListResponseData $data
 */
final class ProposalListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalListResponseData']];
    protected static $nullables = ['data' => false];
}
