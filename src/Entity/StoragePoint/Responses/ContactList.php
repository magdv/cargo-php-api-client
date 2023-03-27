<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: storage-point/responses/contact-list.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список контактов пункта погрузки
 * source: storage-point/responses/contact-list.json
 *
 * @property MessageV2[] $message
 * @property ContactListData $data
 */
final class ContactList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\StoragePoint\Responses\ContactListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
