<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateRange;

/**
 * Информация по тендеру
 * source: tender/objects/tender-request-info.json
 *
 * @property string $name
 * @property int $documentId
 * @property string $description
 * @property int[] $contact
 * @property DateRange $carriageDateRange
 * @property int $statusId
 * @property string $currencyCode
 * @property int $vatRate
 */
final class TenderRequestInfo extends AbstractEntity
{
    protected static $types = [
        'name' => ['string'],
        'documentId' => ['int'],
        'description' => ['string'],
        'contact' => ['array', 'int'],
        'carriageDateRange' => ['Cargomart\ApiClient\Entity\Base\DateRange'],
        'statusId' => ['int'],
        'currencyCode' => ['string'],
        'vatRate' => ['int'],
    ];

    protected static $nullables = [
        'name' => false,
        'documentId' => false,
        'description' => false,
        'contact' => false,
        'carriageDateRange' => false,
        'statusId' => false,
        'currencyCode' => false,
        'vatRate' => false,
    ];
}
