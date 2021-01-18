<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на редактирование группы предзаказов
 * source: manage/pre-order/requests/pre-order-group-update-request.json
 *
 * @property int $templateId
 * @property string $loadingDate
 * @property string $price
 * @property int $total
 */
final class PreOrderGroupUpdateRequest extends AbstractEntity
{
    protected static $types = [
        'templateId' => ['int'],
        'loadingDate' => ['string'],
        'price' => ['string'],
        'total' => ['int'],
    ];

    protected static $nullables = ['templateId' => false, 'loadingDate' => false, 'price' => false, 'total' => false];
}
