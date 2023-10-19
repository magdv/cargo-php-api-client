<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Доступы
 * source: digital-signature/objects/user-certificate.json#/properties/access
 *
 * @property bool $view
 * @property bool $update
 * @property bool $createSend
 * @property bool $createApprove
 * @property bool $createReject
 * @property bool $createCancel
 * @property bool $createRevoke
 */
final class UserCertificateAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'update' => ['bool'],
        'createSend' => ['bool'],
        'createApprove' => ['bool'],
        'createReject' => ['bool'],
        'createCancel' => ['bool'],
        'createRevoke' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'update' => false,
        'createSend' => false,
        'createApprove' => false,
        'createReject' => false,
        'createCancel' => false,
        'createRevoke' => false,
    ];
}
