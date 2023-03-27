<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tms/responses/booking-draft-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Tms\Objects\BookingDraft;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: tms/responses/booking-draft-response.json#/properties/data
 *
 * @property BookingDraft $draft
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 * @property Locality[] $locality
 */
final class BookingDraftResponseData extends AbstractEntity
{
    protected static $types = [
        'draft' => ['Cargomart\ApiClient\Entity\Tms\Objects\BookingDraft'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = ['draft' => false, 'company' => false, 'contact' => false, 'locality' => false];
}
