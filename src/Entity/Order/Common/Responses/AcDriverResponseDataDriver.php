<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Массив обьектов водителей
 * source: order/Common/responses/ac-driver-response.json#/properties/data#/properties/driver
 *
 * @property int $id
 * @property string $name
 */
final class AcDriverResponseDataDriver extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}
