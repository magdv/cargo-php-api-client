<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Базовая контактная информация
 * source: base/custom-contact.json#/properties/contact
 *
 * @property string $name
 * @property string $phone
 * @property string $ext
 */
final class CustomContactContact extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'phone' => ['string'], 'ext' => ['string']];
    protected static $nullables = ['name' => false, 'phone' => false, 'ext' => false];
}
