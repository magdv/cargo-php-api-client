<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/worker/{id}/resend-invite
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Worker\Responses\WorkerResponse;

final class ResendInvitePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Повторно отправть письмо с приглашением в сотрудники.
     *
     * @return WorkerResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): WorkerResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            WorkerResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
