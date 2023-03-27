<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/objects/proposal-banking-details.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Банковские реквизиты перевозчика в заказе экспедитора
 * source: expeditor/objects/proposal-banking-details.json
 *
 * @property int $approveStatus
 * @property bool $isActive
 */
final class ProposalBankingDetails extends AbstractEntity
{
    protected static $types = ['approveStatus' => ['int'], 'isActive' => ['bool']];
    protected static $nullables = ['approveStatus' => false, 'isActive' => false];
}
