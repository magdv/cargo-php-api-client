<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Контактная информация менеджера
 * source: configuration/objects/configuration-consignor-contract-manager.json
 *
 * @property string $phone
 * @property string $name
 * @property string $email
 */
final class ConfigurationConsignorContractManager extends AbstractEntity
{
    protected static $types = ['phone' => ['string'], 'name' => ['string'], 'email' => ['string']];
    protected static $nullables = ['phone' => false, 'name' => false, 'email' => false];
}
