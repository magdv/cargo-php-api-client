<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: worker/responses/worker-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Worker\Objects\Worker;

/**
 * source: worker/responses/worker-response.json#/properties/data
 *
 * @property Worker $worker
 */
final class WorkerResponseData extends AbstractEntity
{
    protected static $types = ['worker' => ['Cargomart\ApiClient\Entity\Worker\Objects\Worker']];
    protected static $nullables = ['worker' => false];
}
