<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\OrderCondition;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: order/responses/order-correction-history-response.json#/properties/data
 *
 * @property CompanyBranch[] $companyBranch
 * @property TruckType[] $truckType
 * @property TruckDevice[] $device
 * @property OrderCondition[] $condition
 * @property LoadingType[] $loadingType
 * @property UserContactShort[] $contact
 * @property Locality[] $locality
 * @property OrderCorrectionHistoryResponseDataHistory $history
 */
final class OrderCorrectionHistoryResponseData extends AbstractEntity
{
    protected static $types = [
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'device' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice'],
        'condition' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderCondition'],
        'loadingType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'history' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderCorrectionHistoryResponseDataHistory'],
    ];

    protected static $nullables = [
        'companyBranch' => false,
        'truckType' => false,
        'device' => false,
        'condition' => false,
        'loadingType' => false,
        'contact' => false,
        'locality' => false,
        'history' => false,
    ];
}
