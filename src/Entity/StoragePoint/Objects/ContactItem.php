<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель контактов склада
 * source: storage-point/objects/contact-item.json
 *
 * @property int $id
 * @property int $storagePointId
 * @property string $phone
 * @property string $name
 * @property string $ext
 */
final class ContactItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'storagePointId' => ['int'],
        'phone' => ['string'],
        'name' => ['string'],
        'ext' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'storagePointId' => false,
        'phone' => false,
        'name' => false,
        'ext' => false,
    ];
}
