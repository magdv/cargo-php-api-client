<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Order\Common\Objects\BidItem;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Common response data
 * source: order/Common/responses/bid-list-response.json#/properties/data
 *
 * @property BidItem[] $bid
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 */
final class BidListResponseData extends AbstractEntity
{
    protected static $types = [
        'bid' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\BidItem'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = ['bid' => false, 'company' => false, 'contact' => false];
}
