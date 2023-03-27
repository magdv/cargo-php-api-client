<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: storage-point/requests/sp-contact.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Структура тела запроса на добавление/редактирование контакта пункта погрузки
 * source: storage-point/requests/sp-contact.json
 *
 * @property int $id
 * @property string $phone
 * @property string $name
 * @property string $ext
 */
final class SpContact extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'phone' => ['string'], 'name' => ['string'], 'ext' => ['string']];
    protected static $nullables = ['id' => false, 'phone' => false, 'name' => false, 'ext' => false];
}
