<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-ecn-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Права доступа к методам работы с Этрн
 * source: order/objects/order-ecn-access.json
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
