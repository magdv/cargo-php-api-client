<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/personal-manager.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель данных персонального менеджера
 * source: company/objects/personal-manager.json
 *
 * @property int $id
 * @property string $fio
 * @property string $position
 * @property PersonalManagerContact[] $contact
 */
final class PersonalManager extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'fio' => ['string'],
        'position' => ['string'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\PersonalManagerContact'],
    ];

    protected static $nullables = ['id' => false, 'fio' => false, 'position' => false, 'contact' => false];
}
