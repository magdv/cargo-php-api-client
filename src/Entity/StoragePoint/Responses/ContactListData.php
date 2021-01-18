<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem;

/**
 * source: storage-point/responses/contact-list.json#/properties/data
 *
 * @property ContactItem[] $storagePointContact
 */
final class ContactListData extends AbstractEntity
{
    protected static $types = [
        'storagePointContact' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem'],
    ];

    protected static $nullables = ['storagePointContact' => false];
}
