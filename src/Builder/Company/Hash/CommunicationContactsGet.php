<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/communication-contacts
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CommunicationContactsResponse;

final class CommunicationContactsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение контактов для связи.
     *
     * @return CommunicationContactsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
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
