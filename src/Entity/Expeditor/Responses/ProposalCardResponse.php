<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/proposal-card-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Карточка заказа Экспедитора
 * source: expeditor/responses/proposal-card-response.json
 *
 * @property MessageV2[] $message
 * @property ProposalCardResponseData $data
 */
final class ProposalCardResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalCardResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
