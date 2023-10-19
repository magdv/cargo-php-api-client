<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/custom-contact.json#/items
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: base/custom-contact.json#/items
 *
 * @property string $name
 * @property string $phone
 * @property string $ext
 */
final class CustomContactItems extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'phone' => ['string'], 'ext' => ['string']];
    protected static $nullables = ['name' => false, 'phone' => false, 'ext' => false];
}
