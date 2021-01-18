<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Common response data
 * source: company/responses/carrier-count-response.json#/properties/data
 *
 * @property CarrierCountResponseDataCarrierCount $carrierCount
 */
final class CarrierCountResponseData extends AbstractEntity
{
    protected static $types = [
        'carrierCount' => ['Cargomart\ApiClient\Entity\Company\Responses\CarrierCountResponseDataCarrierCount'],
    ];

    protected static $nullables = ['carrierCount' => false];
}
