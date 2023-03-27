<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/ac-driver-name-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;

/**
 * source: order/responses/ac-driver-name-response.json#/properties/data
 *
 * @property string[] $driver
 * @property Pagination $pagination
 */
final class AcDriverNameResponseData extends AbstractEntity
{
    protected static $types = [
        'driver' => ['array', 'string'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['driver' => false, 'pagination' => false];
}
