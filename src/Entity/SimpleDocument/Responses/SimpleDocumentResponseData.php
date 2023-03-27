<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: simple-document/responses/simple-document-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocument;

/**
 * source: simple-document/responses/simple-document-response.json#/properties/data
 *
 * @property SimpleDocument $simpleDocument
 */
final class SimpleDocumentResponseData extends AbstractEntity
{
    protected static $types = ['simpleDocument' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocument']];
    protected static $nullables = ['simpleDocument' => false];
}
