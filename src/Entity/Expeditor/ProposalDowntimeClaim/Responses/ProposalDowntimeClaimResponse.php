<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ProposalDowntimeClaim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Претензия перевозчика о простое по заказу Экспедитора
 * source: expeditor/ProposalDowntimeClaim/responses/proposal-downtime-claim-response.json
 *
 * @property ProposalDowntimeClaimResponseData $data
 * @property MessageV2[] $message
 */
final class ProposalDowntimeClaimResponse extends AbstractEntity
{
    protected static $types = [
        'data' => [
            'Cargomart\ApiClient\Entity\Expeditor\ProposalDowntimeClaim\Responses\ProposalDowntimeClaimResponseData',
        ],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
