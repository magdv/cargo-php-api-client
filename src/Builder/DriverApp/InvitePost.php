<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\DriverApp;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\DriverApp\Responses\DriverAppPhoneItemResponse;
use Cargomart\ApiClient\Entity\Driver\Requests\DriverAppInvitePostRequest;

class InvitePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправить на номер телефона водителя приглашение на установку 'приложения водителя'.
     *
     * @return DriverAppPhoneItemResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(DriverAppInvitePostRequest $body): DriverAppPhoneItemResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            DriverAppPhoneItemResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
