<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список сертификатов пользователя
 * source: digital-signature/responses/user-certificate-list-response.json
 *
 * @property UserCertificateListResponseData $data
 */
final class UserCertificateListResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\DigitalSignature\Responses\UserCertificateListResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
