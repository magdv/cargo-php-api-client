<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Шаблон презаказа
 * source: manage/pre-order/responses/pre-order-template-response.json
 *
 * @property MessageV2[] $message
 * @property PreOrderTemplateResponseData $data
 */
final class PreOrderTemplateResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Manage\PreOrder\Responses\PreOrderTemplateResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
