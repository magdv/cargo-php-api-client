<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/user/recovery/{id}/resend-code
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Recovery\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserRecoveryResponse;

final class ResendCodePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Повторная отправка проверочного кода.
     *
     * @return UserRecoveryResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): UserRecoveryResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            UserRecoveryResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
