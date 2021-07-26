<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Детальная информация по просматриваемому документу
 * source: order/objects/simple-document-assignment.json
 *
 * @property string $downloadLink
 * @property string $fileName
 * @property SimpleDocumentTitle[] $titles
 */
final class SimpleDocumentAssignment extends AbstractEntity
{
    protected static $types = [
        'downloadLink' => ['string'],
        'fileName' => ['string'],
        'titles' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\SimpleDocumentTitle'],
    ];

    protected static $nullables = ['downloadLink' => false, 'fileName' => false, 'titles' => false];
}
