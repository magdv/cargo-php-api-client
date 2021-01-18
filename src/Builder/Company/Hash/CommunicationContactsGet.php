<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CommunicationContactsResponse;

class CommunicationContactsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение контактов для связи.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): CommunicationContactsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CommunicationContactsResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
