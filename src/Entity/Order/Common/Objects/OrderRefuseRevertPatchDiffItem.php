<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalRefuse;

/**
 * Информация по запросу на возвращение Отправителем в работу заявки Экспедитора с победителем после отказа
 * source: order/Common/objects/order-refuse-revert-patch-diff-item.json
 *
 * @property int $statusId
 * @property int $extStatusId
 * @property ProposalRefuse[] $refuses
 */
final class OrderRefuseRevertPatchDiffItem extends AbstractEntity
{
    protected static $types = [
        'statusId' => ['int'],
        'extStatusId' => ['int'],
        'refuses' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Common\Objects\ProposalRefuse'],
    ];

    protected static $nullables = ['statusId' => false, 'extStatusId' => false, 'refuses' => false];
}
