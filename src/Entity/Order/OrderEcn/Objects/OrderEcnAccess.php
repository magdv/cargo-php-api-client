<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderEcn\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Права доступа к методам работы с Этрн
 * source: order/OrderEcn/objects/order-ecn-access.json
 *
 * @property bool $view
 * @property bool $createCancel
 * @property bool $createDigital
 * @property bool $viewHistory
 */
final class OrderEcnAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'createCancel' => ['bool'],
        'createDigital' => ['bool'],
        'viewHistory' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'createCancel' => false,
        'createDigital' => false,
        'viewHistory' => false,
    ];
}
