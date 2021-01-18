<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Registration\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Registration\Requests\RegistrationConfirmRequest;
use Cargomart\ApiClient\Entity\Registration\Responses\Reg;

class ConfirmPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтверждение регистрации/ввод проверочного кода.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(RegistrationConfirmRequest $body): Reg
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
