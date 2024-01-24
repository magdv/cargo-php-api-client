<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Объект предложений текущих цен перевозчиков
 * source: expeditor/responses/proposal-offers-list-response.json
 *
 * @property ProposalOffersListResponseData $data
 */
final class ProposalOffersListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalOffersListResponseData']];
    protected static $nullables = ['data' => false];
}
