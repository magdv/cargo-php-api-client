<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к заказу экспедитора
 * source: expeditor/objects/proposal-access.json
 *
 * @property bool $view
 */
final class ProposalAccess extends AbstractEntity
{
    protected static $types = ['view' => ['bool']];
    protected static $nullables = ['view' => false];
}
