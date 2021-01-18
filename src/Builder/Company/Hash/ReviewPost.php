<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\CompanyReviewRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewListResponse;

class ReviewPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отзыв на компанию.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(CompanyReviewRequest $body): CompanyReviewListResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            CompanyReviewListResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
