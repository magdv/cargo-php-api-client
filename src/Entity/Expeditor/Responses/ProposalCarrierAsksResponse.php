<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Объект ставок от перевозчиков
 * source: expeditor/responses/proposal-carrier-asks-response.json
 *
 * @property ProposalCarrierAsksResponseData $data
 */
final class ProposalCarrierAsksResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalCarrierAsksResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
