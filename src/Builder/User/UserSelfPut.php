<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/user/self
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Requests\UserProfileRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserFullResponse;

final class UserSelfPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Сохраняет данные пользователя.
     *
     * @return UserFullResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(UserProfileRequest $body): UserFullResponse
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
