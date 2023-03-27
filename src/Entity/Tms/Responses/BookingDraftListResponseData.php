<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tms/responses/booking-draft-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Tms\Objects\BookingDraft;

/**
 * source: tms/responses/booking-draft-list-response.json#/properties/data
 *
 * @property BookingDraft[] $draft
 */
final class BookingDraftListResponseData extends AbstractEntity
{
    protected static $types = ['draft' => ['array', 'Cargomart\ApiClient\Entity\Tms\Objects\BookingDraft']];
    protected static $nullables = ['draft' => false];
}
