<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Recovery\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\User\Requests\UserRecoveryConfirmRequest;
use Cargomart\ApiClient\Entity\User\Responses\UserRecoveryResponse;

class ConfirmPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтверждение восстановления/ввод проверочного кода.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(UserRecoveryConfirmRequest $body): UserRecoveryResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            UserRecoveryResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
