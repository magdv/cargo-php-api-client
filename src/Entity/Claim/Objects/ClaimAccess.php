<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Claim\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Набор общих доступов к требованию на оплату
 * source: claim/objects/ClaimAccess.json
 *
 * @property bool $createCancel
 * @property bool $createSign
 * @property bool $createReject
 * @property bool $createApprove
 */
final class ClaimAccess extends AbstractEntity
{
    protected static $types = [
        'createCancel' => ['bool'],
        'createSign' => ['bool'],
        'createReject' => ['bool'],
        'createApprove' => ['bool'],
    ];

    protected static $nullables = [
        'createCancel' => false,
        'createSign' => false,
        'createReject' => false,
        'createApprove' => false,
    ];
}
