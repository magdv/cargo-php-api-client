<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект группировки групп предзаказов по шаблонам
 * source: manage/pre-order/objects/pre-order-template-admin-list-item.json
 *
 * @property int $templateId
 * @property int[] $preOrderGroupIds
 */
final class PreOrderTemplateAdminListItem extends AbstractEntity
{
    protected static $types = ['templateId' => ['int'], 'preOrderGroupIds' => ['array', 'int']];
    protected static $nullables = ['templateId' => false, 'preOrderGroupIds' => false];
}
