<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к лоту в статусе 'Сбор предложений'
 * source: tender/objects/tender-request-lot-access.json
 *
 * @property bool $view
 * @property bool $viewProposal
 * @property bool $createOffer
 * @property bool $viewOffer
 * @property bool $updateOffer
 * @property bool $deleteOffer
 */
final class TenderRequestLotAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'viewProposal' => ['bool'],
        'createOffer' => ['bool'],
        'viewOffer' => ['bool'],
        'updateOffer' => ['bool'],
        'deleteOffer' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'viewProposal' => false,
        'createOffer' => false,
        'viewOffer' => false,
        'updateOffer' => false,
        'deleteOffer' => false,
    ];
}
