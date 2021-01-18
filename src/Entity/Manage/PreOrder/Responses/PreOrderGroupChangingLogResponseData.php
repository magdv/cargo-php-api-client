<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderGroupLog;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: manage/pre-order/responses/pre-order-group-changing-log-response.json#/properties/data
 *
 * @property PreOrderGroupLog[] $preOrderGroupLog
 * @property UserContactShort[] $contact
 * @property Pagination $pagination
 */
final class PreOrderGroupChangingLogResponseData extends AbstractEntity
{
    protected static $types = [
        'preOrderGroupLog' => ['array', 'Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderGroupLog'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['preOrderGroupLog' => false, 'contact' => false, 'pagination' => false];
}
