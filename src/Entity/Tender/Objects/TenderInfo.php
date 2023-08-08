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
 * source: tender/objects/tender-info.json
 *
 * @property string $name
 * @property int[] $fileIds
 * @property string $description
 * @property int[] $contact
 * @property DateRange $carriageDateRange
 * @property string $currencyCode
 * @property int $vatRate
 */
final class TenderInfo extends AbstractEntity
{
    protected static $types = [
        'name' => ['string'],
        'fileIds' => ['array', 'int'],
        'description' => ['string'],
        'contact' => ['array', 'int'],
        'carriageDateRange' => ['Cargomart\ApiClient\Entity\Base\DateRange'],
        'currencyCode' => ['string'],
        'vatRate' => ['int'],
    ];

    protected static $nullables = [
        'name' => false,
        'fileIds' => false,
        'description' => false,
        'contact' => false,
        'carriageDateRange' => false,
        'currencyCode' => false,
        'vatRate' => false,
    ];
}
