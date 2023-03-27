<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/registration/{id}/resend-code
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Registration\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Registration\Responses\Reg;

final class ResendCodePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Повторная отправка проверочного кода.
     *
     * @return Reg
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): Reg
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            Reg::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
