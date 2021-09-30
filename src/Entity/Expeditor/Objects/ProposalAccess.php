<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к заказу экспедитора
 * source: expeditor/objects/proposal-access.json
 *
 * @property bool $view
 * @property bool $viewCarrierDocumentTrackingNumber
 * @property bool $viewChat
 * @property bool $createPatch
 * @property bool $createCarrierRefuse
 * @property bool $createRefuse
 * @property bool $viewSimpleDocument
 */
final class ProposalAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'viewCarrierDocumentTrackingNumber' => ['bool'],
        'viewChat' => ['bool'],
        'createPatch' => ['bool'],
        'createCarrierRefuse' => ['bool'],
        'createRefuse' => ['bool'],
        'viewSimpleDocument' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'viewCarrierDocumentTrackingNumber' => false,
        'viewChat' => false,
        'createPatch' => false,
        'createCarrierRefuse' => false,
        'createRefuse' => false,
        'viewSimpleDocument' => false,
    ];
}
