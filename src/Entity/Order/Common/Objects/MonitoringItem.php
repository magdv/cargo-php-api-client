<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект ссылки на GPS/Глонасс мониторинг
 * source: order/Common/objects/monitoring-item.json
 *
 * @property int $id
 * @property string $link
 * @property string $createDate
 */
final class MonitoringItem extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'link' => ['string'], 'createDate' => ['string']];
    protected static $nullables = ['id' => false, 'link' => false, 'createDate' => false];
}
