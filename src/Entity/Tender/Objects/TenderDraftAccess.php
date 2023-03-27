<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/objects/tender-draft-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к черновику тендера
 * source: tender/objects/tender-draft-access.json
 *
 * @property bool $createCopy
 * @property bool $update
 * @property bool $delete
 * @property bool $view
 * @property bool $publish
 */
final class TenderDraftAccess extends AbstractEntity
{
    protected static $types = [
        'createCopy' => ['bool'],
        'update' => ['bool'],
        'delete' => ['bool'],
        'view' => ['bool'],
        'publish' => ['bool'],
    ];

    protected static $nullables = [
        'createCopy' => false,
        'update' => false,
        'delete' => false,
        'view' => false,
        'publish' => false,
    ];
}
