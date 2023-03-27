<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/proposal-carrier-asks-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Объект ставок от перевозчиков
 * source: expeditor/responses/proposal-carrier-asks-response.json
 *
 * @property MessageV2[] $message
 * @property ProposalCarrierAsksResponseData $data
 */
final class ProposalCarrierAsksResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalCarrierAsksResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
