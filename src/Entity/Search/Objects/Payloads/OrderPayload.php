<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Search\Objects\Payloads;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные заказа
 * source: search/objects/payloads/order-payload.json
 *
 * @property string $id
 * @property int $serialId
 * @property int $statusId
 * @property string $externalId
 * @property Points[] $route
 * @property string $kind
 */
final class OrderPayload extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'statusId' => ['int'],
        'externalId' => ['string'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Search\Objects\Payloads\Points'],
        'kind' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'statusId' => false,
        'externalId' => false,
        'route' => false,
        'kind' => false,
    ];
}
