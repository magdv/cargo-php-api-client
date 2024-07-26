<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ExpeditorTask\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Откладывание задачи
 * source: expeditor/ExpeditorTask/requests/expeditor-task-freeze-request.json
 *
 * @property string $freezeTillDate
 * @property string $comment
 */
final class ExpeditorTaskFreezeRequest extends AbstractEntity
{
    protected static $types = ['freezeTillDate' => ['string'], 'comment' => ['string']];
    protected static $nullables = ['freezeTillDate' => false, 'comment' => false];
}
