<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/proposal-list-ids-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список id заказов Экспедитора
 * source: expeditor/responses/proposal-list-ids-response.json
 *
 * @property MessageV2[] $message
 * @property ProposalListIdsResponseData $data
 */
final class ProposalListIdsResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalListIdsResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
