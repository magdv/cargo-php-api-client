<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/objects/tender-request-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к тендеру в стратуе 'Сбор предложений'
 * source: tender/objects/tender-request-access.json
 *
 * @property bool $view
 * @property bool $viewProposal
 * @property bool $createCancel
 * @property bool $downloadResults
 * @property bool $viewCompanyStats
 */
final class TenderRequestAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'viewProposal' => ['bool'],
        'createCancel' => ['bool'],
        'downloadResults' => ['bool'],
        'viewCompanyStats' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'viewProposal' => false,
        'createCancel' => false,
        'downloadResults' => false,
        'viewCompanyStats' => false,
    ];
}
