<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\BidItem;
use Cargomart\ApiClient\Entity\Order\Objects\CompanyExport;
use Cargomart\ApiClient\Entity\Order\Objects\OrderContactItem;

/**
 * Common response data
 * source: order/responses/bid-list-response.json#/properties/data
 *
 * @property BidItem[] $bid
 * @property CompanyExport[] $company
 * @property OrderContactItem[] $contact
 */
final class BidListResponseData extends AbstractEntity
{
    protected static $types = [
        'bid' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\BidItem'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\CompanyExport'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderContactItem'],
    ];

    protected static $nullables = ['bid' => false, 'company' => false, 'contact' => false];
}
