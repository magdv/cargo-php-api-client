<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/user/self/password-change
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Requests\UserPasswordChangeRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserFullResponse;

final class PasswordChangePut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Меняет пароль пользователю.
     *
     * @return UserFullResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(UserPasswordChangeRequest $body): UserFullResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            UserFullResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
