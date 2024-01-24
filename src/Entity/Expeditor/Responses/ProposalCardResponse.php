<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Карточка заказа Экспедитора
 * source: expeditor/responses/proposal-card-response.json
 *
 * @property ProposalCardResponseData $data
 */
final class ProposalCardResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalCardResponseData']];
    protected static $nullables = ['data' => false];
}
