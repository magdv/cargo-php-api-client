<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/ac-curator-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;

/**
 * source: order/responses/ac-curator-response.json#/properties/data
 *
 * @property AcCuratorResponseDataCuratorItems[] $curator
 * @property Pagination $pagination
 */
final class AcCuratorResponseData extends AbstractEntity
{
    protected static $types = [
        'curator' => ['array', 'Cargomart\ApiClient\Entity\Order\Responses\AcCuratorResponseDataCuratorItems'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['curator' => false, 'pagination' => false];
}
