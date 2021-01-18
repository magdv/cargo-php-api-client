<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderLog;

/**
 * source: manage/pre-order/responses/pre-order-group-buying-log-response.json#/properties/data
 *
 * @property PreOrderLog[] $preOrderLog
 * @property CompanyShort[] $company
 * @property Pagination $pagination
 */
final class PreOrderGroupBuyingLogResponseData extends AbstractEntity
{
    protected static $types = [
        'preOrderLog' => ['array', 'Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderLog'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['preOrderLog' => false, 'company' => false, 'pagination' => false];
}
