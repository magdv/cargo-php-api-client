<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: order/OrderDowntimeClaim/requests/order-downtime-claim-create-proof-request.json
 *
 * @property OrderDowntimeClaimCreateProofRequestTrnItem[] $trn
 * @property OrderDowntimeClaimCreateProofRequestCustomItem[] $custom
 */
final class OrderDowntimeClaimCreateProofRequest extends AbstractEntity
{
    protected static $types = [
        'trn' => [
            'array',
            'Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Requests\OrderDowntimeClaimCreateProofRequestTrnItem',
        ],
        'custom' => [
            'array',
            'Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Requests\OrderDowntimeClaimCreateProofRequestCustomItem',
        ],
    ];

    protected static $nullables = ['trn' => false, 'custom' => false];
}
