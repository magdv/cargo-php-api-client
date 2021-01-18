<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные по количеству перевозчиков
 * source: company/responses/carrier-count-response.json#/properties/data#/properties/carrierCount
 *
 * @property int $totalAccessCarrierCount
 * @property int $activeAccessCarrierCount
 */
final class CarrierCountResponseDataCarrierCount extends AbstractEntity
{
    protected static $types = ['totalAccessCarrierCount' => ['int'], 'activeAccessCarrierCount' => ['int']];
    protected static $nullables = ['totalAccessCarrierCount' => false, 'activeAccessCarrierCount' => false];
}
