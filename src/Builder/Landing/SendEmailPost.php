<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/landing/send-email
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Landing;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Landing\Requests\SendEmailRequest;
use Cargomart\ApiClient\Entity\Landing\Responses\LandingMessage;

final class SendEmailPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправка email.
     *
     * @return LandingMessage
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(SendEmailRequest $body): LandingMessage
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            LandingMessage::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
