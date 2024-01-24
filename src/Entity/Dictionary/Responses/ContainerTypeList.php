<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список видов тары
 * source: dictionary/responses/container-type-list.json
 *
 * @property ContainerTypeListData $data
 */
final class ContainerTypeList extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Dictionary\Responses\ContainerTypeListData']];
    protected static $nullables = ['data' => false];
}
