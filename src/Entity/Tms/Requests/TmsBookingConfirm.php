<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Подтверждение бронирования машины (ок, не смогли обработать (кончились машины и тд), иная ошибка)
 * source: tms/requests/confirm-input.json
 *
 * @property string $status
 */
final class TmsBookingConfirm extends AbstractEntity
{
    protected static $types = ['status' => ['string']];
    protected static $nullables = ['status' => false];
}
