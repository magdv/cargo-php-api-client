<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/user/self/phone-change
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserFullResponse;

final class PhoneChangeDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отменяет запроса на изменение телефона.
     *
     * @return UserFullResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): UserFullResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            UserFullResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
