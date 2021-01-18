<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\DriverApp;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DriverApp\Requests\DriverAppInvitePostRequest;
use Cargomart\ApiClient\Entity\DriverApp\Responses\DriverAppPhoneResponse;

class InvitePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправить на номер телефона водителя приглашение на установку 'приложения водителя'.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(DriverAppInvitePostRequest $body): DriverAppPhoneResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            DriverAppPhoneResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
