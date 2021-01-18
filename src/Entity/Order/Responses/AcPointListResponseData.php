<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\AcPointContact;

/**
 * source: order/responses/ac-point-list-response.json#/properties/data
 *
 * @property \stdClass $isNext
 * @property AcPointContact[] $list
 */
final class AcPointListResponseData extends AbstractEntity
{
    protected static $types = [
        'isNext' => ['\stdClass'],
        'list' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\AcPointContact'],
    ];

    protected static $nullables = ['isNext' => true, 'list' => false];
}
