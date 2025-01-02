<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DraftDocument\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\DraftDocument\Objects\DraftDocument;

/**
 * source: draft-document/responses/DraftDocumentResponse.json#/properties/data
 *
 * @property DraftDocument $draftDocument
 */
final class DraftDocumentResponseData extends AbstractEntity
{
    protected static $types = ['draftDocument' => ['Cargomart\ApiClient\Entity\DraftDocument\Objects\DraftDocument']];
    protected static $nullables = ['draftDocument' => false];
}
