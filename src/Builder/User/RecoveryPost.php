<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/user/recovery
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Requests\UserRecoveryCreateRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserRecoveryResponse;

final class RecoveryPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Запрос на восстановление пароля.
     *
     * @return UserRecoveryResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(UserRecoveryCreateRequest $body): UserRecoveryResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            UserRecoveryResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
