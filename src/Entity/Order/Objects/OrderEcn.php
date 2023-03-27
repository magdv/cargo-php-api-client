<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-ecn.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileUrl;

/**
 * Объект ЭТрН заказа
 * source: order/objects/order-ecn.json
 *
 * @property string $id
 * @property string $orderId
 * @property int $serialId
 * @property string $departureName
 * @property string $destinationName
 * @property string $type
 * @property string $number
 * @property int $version
 * @property int $pointIndexFrom
 * @property int $pointIndexTo
 * @property string $status
 * @property string $logisticsStatus
 * @property string $statusGroup
 * @property string $updateDate
 * @property EcnAdditionalData $additionalData
 * @property FileUrl $pdf
 * @property FileUrl $xls
 * @property FileUrl $xml
 * @property FileUrl $pdfDiadoc
 * @property FileUrl $logisticsPdf
 * @property OrderEcnAccess $access
 */
final class OrderEcn extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'orderId' => ['string'],
        'serialId' => ['int'],
        'departureName' => ['string'],
        'destinationName' => ['string'],
        'type' => ['string'],
        'number' => ['string'],
        'version' => ['int'],
        'pointIndexFrom' => ['int'],
        'pointIndexTo' => ['int'],
        'status' => ['string'],
        'logisticsStatus' => ['string'],
        'statusGroup' => ['string'],
        'updateDate' => ['string'],
        'additionalData' => ['Cargomart\ApiClient\Entity\Order\Objects\EcnAdditionalData'],
        'pdf' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
        'xls' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
        'xml' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
        'pdfDiadoc' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
        'logisticsPdf' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderEcnAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'orderId' => false,
        'serialId' => false,
        'departureName' => false,
        'destinationName' => false,
        'type' => false,
        'number' => false,
        'version' => false,
        'pointIndexFrom' => false,
        'pointIndexTo' => false,
        'status' => false,
        'logisticsStatus' => false,
        'statusGroup' => false,
        'updateDate' => false,
        'additionalData' => false,
        'pdf' => false,
        'xls' => false,
        'xml' => false,
        'pdfDiadoc' => false,
        'logisticsPdf' => false,
        'access' => false,
    ];
}
