<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Driver\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Driver\Requests\DriverAppInvitePostRequest;
use Cargomart\ApiClient\Entity\Driver\Responses\DriverResponse;

class DriverAppInvitePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправить на номер телефона водителя приглашение на установку 'приложения водителя'.
     *
     * @return DriverResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(DriverAppInvitePostRequest $body): DriverResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            DriverResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
