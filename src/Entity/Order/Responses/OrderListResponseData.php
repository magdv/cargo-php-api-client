<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Dictionary\Objects\Currency;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\File\Objects\Document;
use Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\MonitoringItem;
use Cargomart\ApiClient\Entity\Order\Objects\OrderShortListItem;
use Cargomart\ApiClient\Entity\Order\Objects\OrderStatus;

/**
 * Common response data
 * source: order/responses/order-list-response.json#/properties/data
 *
 * @property OrderShortListItem[] $order
 * @property CompanyShort[] $company
 * @property CompanyBranch[] $companyBranch
 * @property TruckType[] $truckType
 * @property Pagination $pagination
 * @property string $serverTime
 * @property OrderStatus[] $status
 * @property Currency[] $currency
 * @property Locality[] $locality
 * @property Document[] $proxy
 * @property Document[] $document
 * @property GeneralPartnerContract[] $generalPartnerContract
 * @property MonitoringItem[] $monitoring
 */
final class OrderListResponseData extends AbstractEntity
{
    protected static $types = [
        'order' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderShortListItem'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
        'serverTime' => ['string'],
        'status' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderStatus'],
        'currency' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\Currency'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'proxy' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\Document'],
        'document' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\Document'],
        'generalPartnerContract' => ['array', 'Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract'],
        'monitoring' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\MonitoringItem'],
    ];

    protected static $nullables = [
        'order' => false,
        'company' => false,
        'companyBranch' => false,
        'truckType' => false,
        'pagination' => false,
        'serverTime' => false,
        'status' => false,
        'currency' => false,
        'locality' => false,
        'proxy' => false,
        'document' => false,
        'generalPartnerContract' => false,
        'monitoring' => false,
    ];
}
