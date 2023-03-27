<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/ecn-additional-data.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для генерации накладной
 * source: order/objects/ecn-additional-data.json
 *
 * @property string $type
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
 */
final class EcnAdditionalData extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'pointIndexFrom' => ['int'],
        'pointIndexTo' => ['int'],
        'cargoCondition' => ['string'],
        'packingMethod' => ['string'],
        'containerType' => ['string'],
        'packagesNumber' => ['int'],
        'weight' => ['Cargomart\ApiClient\Entity\Order\Objects\WaybillWeight'],
        'arrival' => ['Cargomart\ApiClient\Entity\Order\Objects\WaybillDate'],
        'departure' => ['Cargomart\ApiClient\Entity\Order\Objects\WaybillDate'],
        'documents' => ['Cargomart\ApiClient\Entity\Order\Objects\EcnAdditionalDataDocuments'],
        'loaderPerson' => ['Cargomart\ApiClient\Entity\Order\Objects\EcnAdditionalDataLoaderPerson'],
        'consignorMark' => ['string'],
        'markComment' => ['string'],
    ];

    protected static $nullables = [
        'type' => false,
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
    ];
}
