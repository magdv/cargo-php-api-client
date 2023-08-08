<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель email адреса для пункта погрузки
 * source: storage-point/objects/point-email-contact.json
 *
 * @property string $email
 * @property bool $isSendDocuments
 */
final class PointEmailContact extends AbstractEntity
{
    protected static $types = ['email' => ['string'], 'isSendDocuments' => ['bool']];
    protected static $nullables = ['email' => false, 'isSendDocuments' => false];
}
