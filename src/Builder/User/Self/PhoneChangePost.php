<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Requests\UserPhoneChangeRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserFullResponse;

class PhoneChangePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Запрос на изменение телефона.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
