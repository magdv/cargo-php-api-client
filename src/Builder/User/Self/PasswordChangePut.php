<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Requests\UserPasswordChangeRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserFullResponse;

class PasswordChangePut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Меняет пароль пользователю.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
