<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель данных контактов персонального менеджера
 * source: company/objects/personal-manager-contact.json
 *
 * @property string $type
 * @property string $value
 */
final class PersonalManagerContact extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'value' => ['string']];
    protected static $nullables = ['type' => false, 'value' => false];
}
