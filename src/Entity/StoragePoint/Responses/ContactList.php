<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список контактов пункта погрузки
 * source: storage-point/responses/contact-list.json
 *
 * @property ContactListData $data
 */
final class ContactList extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\StoragePoint\Responses\ContactListData']];
    protected static $nullables = ['data' => false];
}
