<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/offer-push-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на установку предложения для запроса цен
 * source: order/requests/offer-push-request.json
 *
 * @property string $value
 * @property int $carCount
 * @property string $carCountUnit
 */
final class OfferPushRequest extends AbstractEntity
{
    protected static $types = ['value' => ['string'], 'carCount' => ['int'], 'carCountUnit' => ['string']];
    protected static $nullables = ['value' => false, 'carCount' => false, 'carCountUnit' => false];
}
