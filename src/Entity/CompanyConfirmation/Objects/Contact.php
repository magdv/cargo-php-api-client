<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект контакта
 * source: company-confirmation/objects/contact.json
 *
 * @property string $name
 * @property string $email
 * @property string $contactPhone
 */
final class Contact extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'email' => ['string'], 'contactPhone' => ['string']];
    protected static $nullables = ['name' => false, 'email' => false, 'contactPhone' => false];
}
