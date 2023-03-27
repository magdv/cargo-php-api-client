<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: payment/objects/payment-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Payment\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к информации по оплатам счетов
 * source: payment/objects/payment-access.json
 *
 * @property bool $view
 * @property bool $update
 */
final class PaymentAccess extends AbstractEntity
{
    protected static $types = ['view' => ['bool'], 'update' => ['bool']];
    protected static $nullables = ['view' => false, 'update' => false];
}
