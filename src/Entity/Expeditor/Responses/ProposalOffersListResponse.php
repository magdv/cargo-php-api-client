<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/proposal-offers-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Объект предложений текущих цен перевозчиков
 * source: expeditor/responses/proposal-offers-list-response.json
 *
 * @property MessageV2[] $message
 * @property ProposalOffersListResponseData $data
 */
final class ProposalOffersListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalOffersListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
