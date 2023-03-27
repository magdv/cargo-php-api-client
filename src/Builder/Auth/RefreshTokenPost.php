<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/auth/refresh-token
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Auth;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Auth\Requests\RefreshTokenRequest;
use Cargomart\ApiClient\Entity\Auth\Responses\AuthTokenResponse;

final class RefreshTokenPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Обновление токенов пользователя
     *
     * @return AuthTokenResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(RefreshTokenRequest $body): AuthTokenResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            AuthTokenResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
