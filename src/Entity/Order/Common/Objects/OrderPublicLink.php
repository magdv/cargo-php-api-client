<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект публичной ссылки для модального окна
 * source: order/Common/objects/order-public-link.json
 *
 * @property string $link
 * @property string $fileName
 * @property string $endDate
 */
final class OrderPublicLink extends AbstractEntity
{
    protected static $types = ['link' => ['string'], 'fileName' => ['string'], 'endDate' => ['string']];
    protected static $nullables = ['link' => false, 'fileName' => false, 'endDate' => false];
}
