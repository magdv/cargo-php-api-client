<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/responses/file-link-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Common response data
 * source: base/responses/file-link-response.json#/properties/data
 *
 * @property string $link
 */
final class FileLinkResponseData extends AbstractEntity
{
    protected static $types = ['link' => ['string']];
    protected static $nullables = ['link' => false];
}
