<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/registration/{id}/confirm
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Registration\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Registration\Requests\RegistrationConfirmRequest;
use Cargomart\ApiClient\Entity\Registration\Responses\Reg;

final class ConfirmPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтверждение регистрации/ввод проверочного кода.
     *
     * @return Reg
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
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
