<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статус события в системе ЭДО СБИС (
 *
 *  passedByCarrier - Сдан перевозчиком,
 *
 *  transferredByConsignor - Передан грузоотправителем,
 *
 *  registered - Отправлен в ГИС ЭПД,
 *
 *  acceptedByCarrier - Принят перевозчиком,
 *
 *  rejectedByCarrier - Не принят перевозчиком,
 *
 *  acceptedByConsignee - Принят получателем,
 *
 *  rejectedByConsignee - Не принят получателем)
 * source: order/enums/ecn-sbis-status-enum.json
 */
final class EcnSbisStatusEnum extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
