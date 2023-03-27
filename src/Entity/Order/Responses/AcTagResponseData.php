<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/ac-tag-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;

/**
 * source: order/responses/ac-tag-response.json#/properties/data
 *
 * @property string[] $tag
 * @property Pagination $pagination
 */
final class AcTagResponseData extends AbstractEntity
{
    protected static $types = [
        'tag' => ['array', 'string'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['tag' => false, 'pagination' => false];
}
