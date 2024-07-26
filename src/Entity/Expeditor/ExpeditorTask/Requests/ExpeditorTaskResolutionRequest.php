<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ExpeditorTask\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Отправка резолюции
 * source: expeditor/ExpeditorTask/requests/expeditor-task-resolution-request.json
 *
 * @property string $resolution
 * @property string $comment
 */
final class ExpeditorTaskResolutionRequest extends AbstractEntity
{
    protected static $types = ['resolution' => ['string'], 'comment' => ['string']];
    protected static $nullables = ['resolution' => false, 'comment' => false];
}
