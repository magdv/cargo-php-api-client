<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;

/**
 * source: order/Common/responses/ac-driver-response.json#/properties/data
 *
 * @property AcDriverResponseDataDriver[] $driver
 * @property Pagination $pagination
 */
final class AcDriverResponseData extends AbstractEntity
{
    protected static $types = [
        'driver' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Responses\AcDriverResponseDataDriver'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['driver' => false, 'pagination' => false];
}
