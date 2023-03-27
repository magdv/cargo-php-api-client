<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/user/self/sms-code-confirm
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Requests\UserConfirmPhoneRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserCodeSuccessResponse;

final class SmsCodeConfirmPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтверждение телефона по коду из смс.
     *
     * @return UserCodeSuccessResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(UserConfirmPhoneRequest $body): UserCodeSuccessResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            UserCodeSuccessResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
