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
 * @property bool $viewIssueCertificate
 * @property bool $createIssueCertificate
 * @property bool $updateIssueCertificate
 * @property bool $deleteIssueCertificate
 */
final class WorkerAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'update' => ['bool'],
        'delete' => ['bool'],
        'createResendInvite' => ['bool'],
        'viewIssueCertificate' => ['bool'],
        'createIssueCertificate' => ['bool'],
        'updateIssueCertificate' => ['bool'],
        'deleteIssueCertificate' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'update' => false,
        'delete' => false,
        'createResendInvite' => false,
        'viewIssueCertificate' => false,
        'createIssueCertificate' => false,
        'updateIssueCertificate' => false,
        'deleteIssueCertificate' => false,
    ];
}
