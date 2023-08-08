<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Requests\UsedeskTokenRequest;
use Cargomart\ApiClient\Entity\User\Responses\UseDeskTokenResponse;

class UsedeskTokenPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Обновляет токен с useDesk.
     *
     * @return UseDeskTokenResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(UsedeskTokenRequest $body): UseDeskTokenResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            UseDeskTokenResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
