<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\AcPointContact;

/**
 * source: order/Common/responses/ac-point-list-response.json#/properties/data
 *
 * @property bool $isNext
 * @property AcPointContact[] $list
 */
final class AcPointListResponseData extends AbstractEntity
{
    protected static $types = [
        'isNext' => ['bool'],
        'list' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\AcPointContact'],
    ];

    protected static $nullables = ['isNext' => false, 'list' => false];
}
