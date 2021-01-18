<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Заявка резервирование
 * source: tms/objects/booking-draft.json
 *
 * @property string $id
 * @property string $status
 * @property BookingDraftOrder $order
 * @property BookingDraftRestrictions $restrictions
 * @property BookingDraftAccess $access
 */
final class BookingDraft extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'status' => ['string'],
        'order' => ['Cargomart\ApiClient\Entity\Tms\Objects\BookingDraftOrder'],
        'restrictions' => ['Cargomart\ApiClient\Entity\Tms\Objects\BookingDraftRestrictions'],
        'access' => ['Cargomart\ApiClient\Entity\Tms\Objects\BookingDraftAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'status' => false,
        'order' => false,
        'restrictions' => false,
        'access' => false,
    ];
}
