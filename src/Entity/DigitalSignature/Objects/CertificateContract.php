<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Договор, на основе которого выдан сертификат для пэп
 * source: digital-signature/objects/CertificateContract.json
 *
 * @property string $id
 * @property string $date
 * @property string $number
 * @property string $type
 */
final class CertificateContract extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'date' => ['string'], 'number' => ['string'], 'type' => ['string']];
    protected static $nullables = ['id' => false, 'date' => false, 'number' => false, 'type' => false];
}
