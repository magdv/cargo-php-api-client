<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект куратора
 * source: order/responses/ac-curator-response.json#/properties/data#/properties/curator
 *
 * @property int $id
 * @property string $name
 * @property string $company
 */
final class AcCuratorResponseDataCurator extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string'], 'company' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false, 'company' => false];
}
