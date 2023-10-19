<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список доступа к объекту сотрудника
 * source: worker/objects/worker-access.json
 *
 * @property bool $view
 * @property bool $update
 * @property bool $delete
 * @property bool $createResendInvite
 * @property bool $viewCertificate
 * @property bool $createCertificate
 */
final class WorkerAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'update' => ['bool'],
        'delete' => ['bool'],
        'createResendInvite' => ['bool'],
        'viewCertificate' => ['bool'],
        'createCertificate' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'update' => false,
        'delete' => false,
        'createResendInvite' => false,
        'viewCertificate' => false,
        'createCertificate' => false,
    ];
}
