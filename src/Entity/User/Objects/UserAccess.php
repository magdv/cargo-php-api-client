<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Массив разрешений
 * source: user/objects/user-access.json
 *
 * @property bool $update
 * @property bool $phoneChange
 * @property bool $emailChange
 * @property bool $phoneChangeCancel
 * @property bool $emailChangeCancel
 * @property bool $createContactEmail
 * @property bool $deleteContactEmail
 * @property bool $createConfirmContactEmail
 * @property bool $createResendContactEmail
 * @property bool $smsCodeConfirm
 * @property bool $emailCodeConfirm
 * @property bool $smsCodeResend
 * @property bool $smsCodeSend
 * @property bool $emailCodeSend
 * @property bool $passwordChange
 * @property bool $createVerificationCode
 * @property bool $createIssueCertificateSign
 * @property bool $createIssueCertificateReject
 */
final class UserAccess extends AbstractEntity
{
    protected static $types = [
        'update' => ['bool'],
        'phoneChange' => ['bool'],
        'emailChange' => ['bool'],
        'phoneChangeCancel' => ['bool'],
        'emailChangeCancel' => ['bool'],
        'createContactEmail' => ['bool'],
        'deleteContactEmail' => ['bool'],
        'createConfirmContactEmail' => ['bool'],
        'createResendContactEmail' => ['bool'],
        'smsCodeConfirm' => ['bool'],
        'emailCodeConfirm' => ['bool'],
        'smsCodeResend' => ['bool'],
        'smsCodeSend' => ['bool'],
        'emailCodeSend' => ['bool'],
        'passwordChange' => ['bool'],
        'createVerificationCode' => ['bool'],
        'createIssueCertificateSign' => ['bool'],
        'createIssueCertificateReject' => ['bool'],
    ];

    protected static $nullables = [
        'update' => false,
        'phoneChange' => false,
        'emailChange' => false,
        'phoneChangeCancel' => false,
        'emailChangeCancel' => false,
        'createContactEmail' => false,
        'deleteContactEmail' => false,
        'createConfirmContactEmail' => false,
        'createResendContactEmail' => false,
        'smsCodeConfirm' => false,
        'emailCodeConfirm' => false,
        'smsCodeResend' => false,
        'smsCodeSend' => false,
        'emailCodeSend' => false,
        'passwordChange' => false,
        'createVerificationCode' => false,
        'createIssueCertificateSign' => false,
        'createIssueCertificateReject' => false,
    ];
}
