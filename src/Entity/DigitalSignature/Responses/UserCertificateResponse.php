<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: digital-signature/responses/user-certificate-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Подробный ответ о сертификате ПЭП
 * source: digital-signature/responses/user-certificate-response.json
 *
 * @property MessageV2[] $message
 * @property UserCertificateResponseData $data
 */
final class UserCertificateResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\DigitalSignature\Responses\UserCertificateResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
