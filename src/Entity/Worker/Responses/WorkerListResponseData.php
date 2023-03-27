<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: worker/responses/worker-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Worker\Objects\Worker;

/**
 * source: worker/responses/worker-list-response.json#/properties/data
 *
 * @property Worker[] $worker
 * @property Pagination $pagination
 */
final class WorkerListResponseData extends AbstractEntity
{
    protected static $types = [
        'worker' => ['array', 'Cargomart\ApiClient\Entity\Worker\Objects\Worker'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['worker' => false, 'pagination' => false];
}
