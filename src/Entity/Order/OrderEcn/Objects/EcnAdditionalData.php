<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderEcn\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\NotifyParamItem;
use Cargomart\ApiClient\Entity\Order\Common\Objects\WaybillDate;
use Cargomart\ApiClient\Entity\Order\Common\Objects\WaybillWeight;

/**
 * Данные для генерации накладной
 * source: order/OrderEcn/objects/ecn-additional-data.json
 *
 * @property string $type
 * @property string $externalNumber
 * @property string $operator
 * @property int $pointIndexFrom
 * @property int $pointIndexTo
 * @property string $cargoCondition
 * @property string $packingMethod
 * @property string $containerType
 * @property int $packagesNumber
 * @property WaybillWeight $weight
 * @property WaybillDate $arrival
 * @property WaybillDate $departure
 * @property EcnAdditionalDataDocuments $documents
 * @property EcnAdditionalDataLoaderPerson $loaderPerson
 * @property string $consignorMark
 * @property string $markComment
 * @property NotifyParamItem[] $notifyParams
 */
final class EcnAdditionalData extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'externalNumber' => ['string'],
        'operator' => ['string'],
        'pointIndexFrom' => ['int'],
        'pointIndexTo' => ['int'],
        'cargoCondition' => ['string'],
        'packingMethod' => ['string'],
        'containerType' => ['string'],
        'packagesNumber' => ['int'],
        'weight' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\WaybillWeight'],
        'arrival' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\WaybillDate'],
        'departure' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\WaybillDate'],
        'documents' => ['Cargomart\ApiClient\Entity\Order\OrderEcn\Objects\EcnAdditionalDataDocuments'],
        'loaderPerson' => ['Cargomart\ApiClient\Entity\Order\OrderEcn\Objects\EcnAdditionalDataLoaderPerson'],
        'consignorMark' => ['string'],
        'markComment' => ['string'],
        'notifyParams' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\NotifyParamItem'],
    ];

    protected static $nullables = [
        'type' => false,
        'externalNumber' => false,
        'operator' => false,
        'pointIndexFrom' => false,
        'pointIndexTo' => false,
        'cargoCondition' => false,
        'packingMethod' => false,
        'containerType' => false,
        'packagesNumber' => false,
        'weight' => false,
        'arrival' => false,
        'departure' => false,
        'documents' => false,
        'loaderPerson' => false,
        'consignorMark' => false,
        'markComment' => false,
        'notifyParams' => false,
    ];
}
