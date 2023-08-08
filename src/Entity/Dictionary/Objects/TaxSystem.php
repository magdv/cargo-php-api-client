<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект описания режима налогообложения
 * source: dictionary/objects/tax-system.json
 *
 * @property string $id
 * @property string $name
 * @property string $title
 * @property bool $isWithDeclaration
 */
final class TaxSystem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'name' => ['string'],
        'title' => ['string'],
        'isWithDeclaration' => ['bool'],
    ];

    protected static $nullables = ['id' => false, 'name' => false, 'title' => false, 'isWithDeclaration' => false];
}
