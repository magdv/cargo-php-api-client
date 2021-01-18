<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlPoint;
use Cargomart\ApiClient\Entity\Order\Objects\TemperatureRange;

/**
 * Данные для редактирования объекта заказа FTL
 * source: order/requests/order-draft-ftl-request.json
 *
 * @property int $version
 * @property string $comment
 * @property string $date
 * @property int $truckTypeId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property string $cargoType
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property int $paymentTypeId
 * @property string $paymentDetail
 * @property string $currencyCode
 * @property float $vatRate
 * @property string $openPrice
 * @property string $externalId
 * @property OrderDraftFtlPoint[] $route
 * @property int[] $contact
 * @property string[] $tags
 * @property string $stepBid
 * @property string $type
 * @property string $accessTypeId
 * @property int $contractTypeId
 * @property string $startDate
 * @property string $endDate
 * @property int $duration
 */
final class OrderDraftFtlRequest extends AbstractEntity
{
    protected static $types = [
        'version' => ['int'],
        'comment' => ['string'],
        'date' => ['string'],
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'cargoType' => ['string'],
        'temperature' => ['Cargomart\ApiClient\Entity\Order\Objects\TemperatureRange'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'paymentTypeId' => ['int'],
        'paymentDetail' => ['string'],
        'currencyCode' => ['string'],
        'vatRate' => ['float'],
        'openPrice' => ['string'],
        'externalId' => ['string'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlPoint'],
        'contact' => ['array', 'int'],
        'tags' => ['array', 'string'],
        'stepBid' => ['string'],
        'type' => ['string'],
        'accessTypeId' => ['string'],
        'contractTypeId' => ['int'],
        'startDate' => ['string'],
        'endDate' => ['string'],
        'duration' => ['int'],
    ];

    protected static $nullables = [
        'version' => false,
        'comment' => false,
        'date' => false,
        'truckTypeId' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'cargoType' => false,
        'temperature' => false,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'paymentTypeId' => false,
        'paymentDetail' => false,
        'currencyCode' => false,
        'vatRate' => false,
        'openPrice' => false,
        'externalId' => false,
        'route' => false,
        'contact' => false,
        'tags' => false,
        'stepBid' => false,
        'type' => false,
        'accessTypeId' => false,
        'contractTypeId' => false,
        'startDate' => false,
        'endDate' => false,
        'duration' => false,
    ];
}
