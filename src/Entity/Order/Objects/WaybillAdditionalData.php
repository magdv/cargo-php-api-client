<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/waybill-additional-data.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для генерации накладной
 * source: order/objects/waybill-additional-data.json
 *
 * @property string $type
 * @property int $pointIdFrom
 * @property int $pointIdTo
 * @property string $cargoCondition
 * @property string $packingMethod
 * @property string $containerType
 * @property int $packagesNumber
 * @property WaybillWeight $weight
 * @property WaybillDate $arrival
 * @property WaybillDate $departure
 * @property WaybillAdditionalDataDocuments $documents
 * @property WaybillAdditionalDataLoaderPerson $loaderPerson
 * @property string $consignorMark
 * @property string $markComment
 */
final class WaybillAdditionalData extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'pointIdFrom' => ['int'],
        'pointIdTo' => ['int'],
        'cargoCondition' => ['string'],
        'packingMethod' => ['string'],
        'containerType' => ['string'],
        'packagesNumber' => ['int'],
        'weight' => ['Cargomart\ApiClient\Entity\Order\Objects\WaybillWeight'],
        'arrival' => ['Cargomart\ApiClient\Entity\Order\Objects\WaybillDate'],
        'departure' => ['Cargomart\ApiClient\Entity\Order\Objects\WaybillDate'],
        'documents' => ['Cargomart\ApiClient\Entity\Order\Objects\WaybillAdditionalDataDocuments'],
        'loaderPerson' => ['Cargomart\ApiClient\Entity\Order\Objects\WaybillAdditionalDataLoaderPerson'],
        'consignorMark' => ['string'],
        'markComment' => ['string'],
    ];

    protected static $nullables = [
        'type' => false,
        'pointIdFrom' => false,
        'pointIdTo' => false,
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
    ];
}
