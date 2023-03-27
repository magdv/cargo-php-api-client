<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/review
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewListResponse;

final class ReviewGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отзывы на компанию.
     *
     * @return CompanyReviewListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyReviewListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyReviewListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
