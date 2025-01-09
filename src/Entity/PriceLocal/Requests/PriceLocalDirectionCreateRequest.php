<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PriceLocal\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для создания направления отдельного элемента справочника цен
 * source: price-local/requests/price-local-direction-create-request.json
 *
 * @property string $departureCode
 * @property string $destinationCode
 */
final class PriceLocalDirectionCreateRequest extends AbstractEntity
{
    protected static $types = ['departureCode' => ['string'], 'destinationCode' => ['string']];
    protected static $nullables = ['departureCode' => false, 'destinationCode' => false];
}
