<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Тело запроса для добавления ссылки на GPS/Глонасс мониторинг
 * source: order/requests/monitoring-request.json
 *
 * @property string $link
 */
final class MonitoringRequest extends AbstractEntity
{
    protected static $types = ['link' => ['string']];
    protected static $nullables = ['link' => false];
}
