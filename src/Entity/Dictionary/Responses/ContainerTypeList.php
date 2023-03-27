<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/responses/container-type-list.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список видов тары
 * source: dictionary/responses/container-type-list.json
 *
 * @property MessageV2[] $message
 * @property ContainerTypeListData $data
 */
final class ContainerTypeList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Dictionary\Responses\ContainerTypeListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
