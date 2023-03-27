<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/partner-message
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Partner\Response\PartnerMessageResponse;

final class PartnerMessageGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение последнего партнёрского сообщения от компании.
     *
     * @return PartnerMessageResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PartnerMessageResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PartnerMessageResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
