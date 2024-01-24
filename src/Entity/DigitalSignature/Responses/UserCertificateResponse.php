<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Подробный ответ о сертификате ПЭП
 * source: digital-signature/responses/user-certificate-response.json
 *
 * @property UserCertificateResponseData $data
 */
final class UserCertificateResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\DigitalSignature\Responses\UserCertificateResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
