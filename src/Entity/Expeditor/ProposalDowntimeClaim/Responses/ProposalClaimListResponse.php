<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ProposalDowntimeClaim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ со списком требований по заказу Экспедитора
 * source: expeditor/ProposalDowntimeClaim/responses/ProposalClaimListResponse.json
 *
 * @property ProposalClaimListResponseData $data
 * @property MessageV2[] $message
 */
final class ProposalClaimListResponse extends AbstractEntity
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\ProposalDowntimeClaim\Responses\ProposalClaimListResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
