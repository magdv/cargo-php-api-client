<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SignedDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Доступы к действиям
 * source: signed-document/objects/SignedDocumentAccess.json
 *
 * @property bool $viewPdf
 */
final class SignedDocumentAccess extends AbstractEntity
{
    protected static $types = ['viewPdf' => ['bool']];
    protected static $nullables = ['viewPdf' => false];
}
