<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserFullResponse;

class SmsCodeSendPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Посылает повторную смс.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): UserFullResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            UserFullResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
