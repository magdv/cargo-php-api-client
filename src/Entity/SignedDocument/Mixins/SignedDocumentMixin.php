<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SignedDocument\Mixins;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Document date/number mixin
 * source: signed-document/mixins/SignedDocumentMixin.json
 *
 * @property string $date
 * @property string $number
 */
final class SignedDocumentMixin extends AbstractEntity
{
    protected static $types = ['date' => ['string'], 'number' => ['string']];
    protected static $nullables = ['date' => false, 'number' => false];
}
