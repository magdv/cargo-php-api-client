<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;

/**
 * source: order/Common/responses/order-client-access-list-response.json#/properties/data
 *
 * @property CompanyShort[] $company
 * @property bool $isNext
 * @property Pagination $pagination
 */
final class OrderClientAccessListResponseData extends AbstractEntity
{
    protected static $types = [
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'isNext' => ['bool'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['company' => false, 'isNext' => false, 'pagination' => false];
}
