<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/user/self/phone-change
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Requests\UserPhoneChangeRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserFullResponse;

final class PhoneChangePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Запрос на изменение телефона.
     *
     * @return UserFullResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(UserPhoneChangeRequest $body): UserFullResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            UserFullResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
