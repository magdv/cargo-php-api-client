<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DraftDocument\Mixins;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\DraftDocument\Objects\DraftDocumentAccess;

/**
 * Идентификатор и доступы для черновика
 * source: draft-document/mixins/DraftDocumentIdAccessMixin.json
 *
 * @property string $id
 * @property string $createDate
 * @property DraftDocumentAccess $access
 */
final class DraftDocumentIdAccessMixin extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'createDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\DraftDocument\Objects\DraftDocumentAccess'],
    ];

    protected static $nullables = ['id' => false, 'createDate' => false, 'access' => false];
}
