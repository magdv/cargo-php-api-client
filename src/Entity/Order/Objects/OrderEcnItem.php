<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileUrl;
use Cargomart\ApiClient\Entity\File\Objects\FileV2;

/**
 * Объект ЭТрН заказа для списка
 * source: order/objects/order-ecn-item.json
 *
 * @property string $id
 * @property string $orderId
 * @property int $serialId
 * @property string $departureName
 * @property string $departureLegalName
 * @property string $destinationName
 * @property string $destinationLegalName
 * @property string $type
 * @property string $number
 * @property int $version
 * @property int $pointIndexFrom
 * @property int $pointIndexTo
 * @property string $status
 * @property \stdClass $edmOperatorStatus
 * @property string $statusGroup
 * @property string $updateDate
 * @property EcnAdditionalData $additionalData
 * @property FileV2 $ecnFile
 * @property FileUrl $pdf
 * @property FileUrl $xls
 * @property FileUrl $xml
 * @property OrderEcnAccess $access
 */
final class OrderEcnItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'orderId' => ['string'],
        'serialId' => ['int'],
        'departureName' => ['string'],
        'departureLegalName' => ['string'],
        'destinationName' => ['string'],
        'destinationLegalName' => ['string'],
        'type' => ['string'],
        'number' => ['string'],
        'version' => ['int'],
        'pointIndexFrom' => ['int'],
        'pointIndexTo' => ['int'],
        'status' => ['string'],
        'edmOperatorStatus' => ['\stdClass'],
        'statusGroup' => ['string'],
        'updateDate' => ['string'],
        'additionalData' => ['Cargomart\ApiClient\Entity\Order\Objects\EcnAdditionalData'],
        'ecnFile' => ['Cargomart\ApiClient\Entity\File\Objects\FileV2'],
        'pdf' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
        'xls' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
        'xml' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderEcnAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'orderId' => false,
        'serialId' => false,
        'departureName' => false,
        'departureLegalName' => false,
        'destinationName' => false,
        'destinationLegalName' => false,
        'type' => false,
        'number' => false,
        'version' => false,
        'pointIndexFrom' => false,
        'pointIndexTo' => false,
        'status' => false,
        'edmOperatorStatus' => true,
        'statusGroup' => false,
        'updateDate' => false,
        'additionalData' => false,
        'ecnFile' => false,
        'pdf' => false,
        'xls' => false,
        'xml' => false,
        'access' => false,
    ];
}
