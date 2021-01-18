<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Requests\UserLoginRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserLoginResponse;

class LoginPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Авторизация пользователя и выдача токена.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(UserLoginRequest $body): UserLoginResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            UserLoginResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
