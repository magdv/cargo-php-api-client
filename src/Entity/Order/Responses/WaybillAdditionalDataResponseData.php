<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/waybill-additional-data-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Dictionary\Objects\ContainerTypeItem;
use Cargomart\ApiClient\Entity\Order\Objects\WaybillAdditionalData;

/**
 * Данные
 * source: order/responses/waybill-additional-data-response.json#/properties/data
 *
 * @property WaybillAdditionalData[] $additionalData
 * @property ContainerTypeItem[] $container
 */
final class WaybillAdditionalDataResponseData extends AbstractEntity
{
    protected static $types = [
        'additionalData' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\WaybillAdditionalData'],
        'container' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\ContainerTypeItem'],
    ];

    protected static $nullables = ['additionalData' => false, 'container' => false];
}
