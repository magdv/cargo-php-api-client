<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Имеющиеся добавочные данные для заполнения доверенности на самовывоз с/без факсимиле.
 * source: order/responses/order-additional-info-response.json
 *
 * @property OrderAdditionalInfoResponseData $data
 */
final class OrderAdditionalInfoResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderAdditionalInfoResponseData']];
    protected static $nullables = ['data' => false];
}
