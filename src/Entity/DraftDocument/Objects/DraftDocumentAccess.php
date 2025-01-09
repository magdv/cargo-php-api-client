<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DraftDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к черновику
 * source: draft-document/objects/DraftDocumentAccess.json
 *
 * @property bool $update
 * @property bool $delete
 */
final class DraftDocumentAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool'], 'delete' => ['bool']];
    protected static $nullables = ['update' => false, 'delete' => false];
}
