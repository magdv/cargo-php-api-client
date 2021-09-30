<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Детальная информация по просматриваемому документу
 * source: simple-document/objects/simple-document-assignment.json
 *
 * @property int $assignmentNumber
 * @property string $assignmentDate
 * @property string $downloadLink
 * @property string $fileName
 * @property string $type
 * @property SimpleDocumentTitle[] $title
 */
final class SimpleDocumentAssignment extends AbstractEntity
{
    protected static $types = [
        'assignmentNumber' => ['int'],
        'assignmentDate' => ['string'],
        'downloadLink' => ['string'],
        'fileName' => ['string'],
        'type' => ['string'],
        'title' => ['array', 'Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentTitle'],
    ];

    protected static $nullables = [
        'assignmentNumber' => false,
        'assignmentDate' => false,
        'downloadLink' => false,
        'fileName' => false,
        'type' => false,
        'title' => false,
    ];
}
