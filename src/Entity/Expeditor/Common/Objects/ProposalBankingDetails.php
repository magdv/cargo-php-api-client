<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Банковские реквизиты перевозчика в заказе экспедитора
 * source: expeditor/Common/objects/proposal-banking-details.json
 *
 * @property int $approveStatus
 * @property bool $isActive
 */
final class ProposalBankingDetails extends AbstractEntity
{
    protected static $types = ['approveStatus' => ['int'], 'isActive' => ['bool']];
    protected static $nullables = ['approveStatus' => false, 'isActive' => false];
}
