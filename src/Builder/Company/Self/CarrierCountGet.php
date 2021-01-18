<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CarrierCountResponse;

class CarrierCountGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['relateType' => 'all'];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение количества перевозчиков, которые могут участвовать в заказах
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): CarrierCountResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CarrierCountResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Из какого массива перевозчиков нужно выбирать (все, мои партнеры, партнеры с договорами)
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qRelateType(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['relateType']);
        } else {
            $c->query['relateType'] = $value;
        }

        return $c;
    }

    /**
     * При relateType = partner-with-contract, можно указать тип договора
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qContractTypeId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['contractTypeId']);
        } else {
            $c->query['contractTypeId'] = $value;
        }

        return $c;
    }

    /**
     * Список идентификаторов перевозчиков, которым ограничен доступ
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qExcludeIds(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['excludeIds']);
        } else {
            $c->query['excludeIds'] = $value;
        }

        return $c;
    }
}
