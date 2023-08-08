<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;

/**
 * source: order/responses/ac-worker-response.json#/properties/data
 *
 * @property AcWorkerResponseDataWorker[] $worker
 * @property Pagination $pagination
 */
final class AcWorkerResponseData extends AbstractEntity
{
    protected static $types = [
        'worker' => ['array', 'Cargomart\ApiClient\Entity\Order\Responses\AcWorkerResponseDataWorker'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['worker' => false, 'pagination' => false];
}
