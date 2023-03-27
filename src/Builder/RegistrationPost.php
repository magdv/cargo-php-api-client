<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/registration
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Registration\Requests\RegistrationBaseRequest;
use Cargomart\ApiClient\Entity\Registration\Responses\Reg;

final class RegistrationPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Задание логина пользователя/начало процесса регистрации.
     *
     * @return Reg
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(RegistrationBaseRequest $body): Reg
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            Reg::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
