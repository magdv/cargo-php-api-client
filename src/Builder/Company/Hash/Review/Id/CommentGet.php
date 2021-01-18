<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash\Review\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewCommentListResponse;

class CommentGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Комментарии к отзыву на компанию.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
