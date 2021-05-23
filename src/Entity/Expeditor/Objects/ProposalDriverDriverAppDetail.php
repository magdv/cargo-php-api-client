<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Детализация наличия 'приложения водителя' по отдельным номерам телефонов
 * source: expeditor/objects/proposal-driver.json#/properties/driverAppDetail
 *
 * @property string $phone
 * @property string $status
 */
final class ProposalDriverDriverAppDetail extends AbstractEntity
{
    protected static $types = ['phone' => ['string'], 'status' => ['string']];
    protected static $nullables = ['phone' => false, 'status' => false];
}
