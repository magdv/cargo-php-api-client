<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserOneTimeTokenResponse;

class TokenPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание одноразового токена
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): UserOneTimeTokenResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            UserOneTimeTokenResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
