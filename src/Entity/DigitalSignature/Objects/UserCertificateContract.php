<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные договора
 * source: digital-signature/objects/user-certificate.json#/properties/contract
 *
 * @property string $type
 * @property string $id
 * @property string $number
 * @property string $date
 */
final class UserCertificateContract extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'id' => ['string'], 'number' => ['string'], 'date' => ['string']];
    protected static $nullables = ['type' => false, 'id' => false, 'number' => false, 'date' => false];
}
