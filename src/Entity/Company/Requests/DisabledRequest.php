<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для сохранения нового факта добавления в чёрный список
 * source: company/requests/disabled-request.json
 *
 * @property string $deadline
 * @property string $reason
 */
final class DisabledRequest extends AbstractEntity
{
    protected static $types = ['deadline' => ['string'], 'reason' => ['string']];
    protected static $nullables = ['deadline' => false, 'reason' => false];
}
