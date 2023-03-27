<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/review/{id}/comment
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash\Review\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewCommentListResponse;

final class CommentGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Комментарии к отзыву на компанию.
     *
     * @return CompanyReviewCommentListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): CompanyReviewCommentListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyReviewCommentListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
