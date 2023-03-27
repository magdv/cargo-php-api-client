<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/user/count-active
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserCountActive;

final class CountActiveGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Количество активных пользователей
     *
     * @return UserCountActive
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): UserCountActive
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            UserCountActive::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
