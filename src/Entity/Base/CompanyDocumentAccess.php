<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Контекстные права доступа к документу
 * source: base/company-document.json#/properties/access
 *
 * @property bool $download
 */
final class CompanyDocumentAccess extends AbstractEntity
{
    protected static $types = ['download' => ['bool']];
    protected static $nullables = ['download' => false];
}
