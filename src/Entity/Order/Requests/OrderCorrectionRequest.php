<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/order-correction-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для создания запроса на изменение заказа
 * source: order/requests/order-correction-request.json
 *
 * @property \stdClass $companyBranchId
 * @property \stdClass $comment
 * @property int $truckTypeId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property string $cargoType
 * @property \stdClass $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property \stdClass $vatRate
 * @property string $currentPrice
 * @property string $currencyCode
 * @property OrderCorrectionPointRequest[] $points
 * @property int[] $contacts
 * @property string $commentForConsignor
 * @property \stdClass $commentForCarrier
 */
final class OrderCorrectionRequest extends AbstractEntity
{
    protected static $types = [
        'companyBranchId' => ['\stdClass'],
        'comment' => ['\stdClass'],
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'cargoType' => ['string'],
        'temperature' => ['\stdClass'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'vatRate' => ['\stdClass'],
        'currentPrice' => ['string'],
        'currencyCode' => ['string'],
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\Requests\OrderCorrectionPointRequest'],
        'contacts' => ['array', 'int'],
        'commentForConsignor' => ['string'],
        'commentForCarrier' => ['\stdClass'],
    ];

    protected static $nullables = [
        'companyBranchId' => true,
        'comment' => true,
        'truckTypeId' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'cargoType' => false,
        'temperature' => true,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'vatRate' => true,
        'currentPrice' => false,
        'currencyCode' => false,
        'points' => false,
        'contacts' => false,
        'commentForConsignor' => false,
        'commentForCarrier' => true,
    ];
}
