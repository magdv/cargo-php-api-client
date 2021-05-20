<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Partner\Response\PartnerMessage;

class PartnerMessageGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение последнего партнёрского сообщения от компании.
     *
     * @return PartnerMessage
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PartnerMessage
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PartnerMessage::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
