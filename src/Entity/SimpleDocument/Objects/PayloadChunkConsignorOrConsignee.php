<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о грузоотправителе/грузополучателе из титула отправителя
 * source: simple-document/objects/payload-chunk-consignor-or-consignee.json
 *
 * @property int $legalStatus
 * @property string $legalName
 * @property string $title
 * @property string[] $contacts
 * @property string $name
 */
final class PayloadChunkConsignorOrConsignee extends AbstractEntity
{
    protected static $types = [
        'legalStatus' => ['int'],
        'legalName' => ['string'],
        'title' => ['string'],
        'contacts' => ['array', 'string'],
        'name' => ['string'],
    ];

    protected static $nullables = [
        'legalStatus' => false,
        'legalName' => false,
        'title' => false,
        'contacts' => false,
        'name' => false,
    ];
}
