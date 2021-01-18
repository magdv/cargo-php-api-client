<?php

declare(strict_types=1);

namespace Cargomart\ApiClient;

use Cargomart\ApiClient\Authentication\AuthenticationInterface;
use Cargomart\ApiClient\Exceptions\CargomartClientException;
use Cargomart\ApiClient\Exceptions\HttpClientError;
use Cargomart\ApiClient\Exceptions\JsonEncodeDecodeError;
use Cargomart\ApiClient\Exceptions\JsonException;
use Cargomart\ApiClient\Exceptions\UnknownError;
use Cargomart\ApiClient\Http\Status;
use Cargomart\ApiClient\Utils\Json;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

class Client
{
    /**
     * @var ClientInterface
     */
    private $client;
    /**
     * @var AuthenticationInterface
     */
    private $authentication;

    public function __construct(ClientInterface $client, ?AuthenticationInterface $authentication = null)
    {
        $this->client = $client;
        $this->authentication = $authentication;
    }

    public function setAuthentication(?AuthenticationInterface $authentication): void
    {
        $this->authentication = $authentication;
    }

    public function apiV2()
    {
        return new Builder\ApiV2([], $this);
    }

    /**
     * @param string $method
     * @param string $url
     * @param string $responseClass
     * @param string|null $query
     * @param object|null $body
     * @param array|null $headers
     *
     * @return AbstractResponse
     *
     * @throws CargomartClientException|Authentication\exceptions\TokenInvalidException
     * @internal
     */
    public function doRequest(
        string $method,
        string $url,
        string $responseClass,
        ?string $query,
        ?object $body,
        array $headers = []
    ): AbstractResponse {
        $uri = $url . (! empty($query) ? '?' . $query : '');

        if ($this->authentication !== null && $this->authentication->hasToken()) {
            $headers['Authorization'] = $this->authentication->getToken();
        }
        if (! isset($headers['Content-Type'])) {
            $headers['Content-Type'] = 'application/json';
        }

        try {
            $encodedBody = null;
            if (null !== $body) {
                $encodedBody = Json::encode($body);
            }
            $req = new Request($method, $uri, $headers, $encodedBody);

            $rsp = $this->client->sendRequest($req);

            return $this->decodeResponse($responseClass, $rsp);
        } catch (JsonException $e) {
            throw new JsonEncodeDecodeError($e);
        } catch (ClientExceptionInterface $e) {
            throw new HttpClientError($e);
        } catch (\Exception $e) {
            throw new UnknownError($e);
        }
    }

    /**
     * @param string $responseClass
     * @param ResponseInterface $rsp
     *
     * @return AbstractResponse
     * @throws JsonException
     *
     */
    private function decodeResponse(string $responseClass, ResponseInterface $rsp): AbstractResponse
    {
        \assert(is_subclass_of($responseClass, AbstractResponse::class));

        $data = $responseClass::deserialize(Json::decode($rsp->getBody()->getContents()));
        \assert($data instanceof AbstractResponse);

        foreach ($rsp->getHeaders() as $h => $v) {
            if (is_array($v)) {
                $data->headers[$h] = reset($v);
            } else {
                $data->headers[$h] = $v;
            }
        }
        $data->status = new Status($rsp->getStatusCode());

        return $data;
    }
}
