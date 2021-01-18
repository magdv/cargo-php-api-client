<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash\Review\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\CompanyReviewCommentRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyReviewCommentResponse;

class CommentPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Комментарий к отзыву на компанию.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(CompanyReviewCommentRequest $body): CompanyReviewCommentResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            CompanyReviewCommentResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
