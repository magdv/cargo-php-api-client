<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Requests\IdListRequest;

/**
 * Данные на валидацию для создания запроса на изменение заказа
 * source: order/requests/order-correction-validate-request.json
 *
 * @property int $truckTypeId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property string $cargoType
 * @property \stdClass $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property string $currentPrice
 * @property OrderCorrectionPointRequest[] $points
 * @property IdListRequest[] $contacts
 */
final class OrderCorrectionValidateRequest extends AbstractEntity
{
    protected static $types = [
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'cargoType' => ['string'],
        'temperature' => ['\stdClass'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'currentPrice' => ['string'],
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\Requests\OrderCorrectionPointRequest'],
        'contacts' => ['array', 'Cargomart\ApiClient\Entity\Base\Requests\IdListRequest'],
    ];

    protected static $nullables = [
        'truckTypeId' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'cargoType' => false,
        'temperature' => true,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'currentPrice' => false,
        'points' => false,
        'contacts' => false,
    ];
}
