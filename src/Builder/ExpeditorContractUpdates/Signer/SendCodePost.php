<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractUpdates\Signer;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\BaseMessageResponse;

class SendCodePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подтверждение подписанта через sms
     *
     * @return BaseMessageResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): BaseMessageResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            BaseMessageResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
