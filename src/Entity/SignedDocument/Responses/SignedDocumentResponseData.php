<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SignedDocument\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocument;

/**
 * source: signed-document/responses/SignedDocumentResponse.json#/properties/data
 *
 * @property SignedDocument $signedDocument
 */
final class SignedDocumentResponseData extends AbstractEntity
{
    protected static $types = ['signedDocument' => ['Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocument']];
    protected static $nullables = ['signedDocument' => false];
}
