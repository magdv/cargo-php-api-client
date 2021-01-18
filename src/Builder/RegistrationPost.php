<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Registration\Requests\RegistrationBaseRequest;
use Cargomart\ApiClient\Entity\Registration\Responses\Reg;

class RegistrationPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Задание логина пользователя/начало процесса регистрации.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
