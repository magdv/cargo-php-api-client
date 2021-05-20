<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Registration;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Registration\Responses\Reg;

class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение процесса регистрации.
     *
     * @return Reg
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): Reg
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            Reg::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
