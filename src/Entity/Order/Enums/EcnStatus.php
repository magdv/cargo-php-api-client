<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статус ЭТРН в Каргомарте(
 *
 * draft - создан,
 *
 * waiting_for_sign - ожидает подписания,
 *
 * waiting_loading_to_external_service - ожидает загрузки во внешний сервис,
 *
 * loading_to_external_service - идет загрузка во внешний сервис,
 *
 * loaded - загружено во внешний сервис,
 *
 * loading_error - ошибка загрузки во внешний сервис,
 *
 *  waiting_to_cancel - ожидает отмены во внешнем сервисе,
 *
 *  canceling - отменяется во внешнем сервисе,
 *
 * canceled - отменено во внешнем сервисе,
 *
 * done - жц во внешнем сервисе завершен)
 * source: order/enums/ecn-status.json
 */
final class EcnStatus extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
