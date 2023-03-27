<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/disabled
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\DisabledRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyInfoResponse;

final class DisabledPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод добавления компании в чёрный список.
     *
     * @return CompanyInfoResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(DisabledRequest $body): CompanyInfoResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            CompanyInfoResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
