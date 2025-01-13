<?php
/**
 * OrderStepBidApi
 * PHP version 7.2
 *
 * @category Class
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cargomart API v2
 *
 * REST-Full API для логистической биржи cargomart.ru
 *
 * The version of the OpenAPI document: 2.0
 * Contact: support@cargomart.ru
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MagDv\Cargomart\CargoApi;

use GuzzleHttp\Psr7\MultipartStream;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\RedirectPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\Common\PluginClientFactory;
use Http\Client\Exception\HttpException;
use Http\Client\HttpAsyncClient;
use Http\Discovery\HttpAsyncClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\RequestFactory;
use Http\Promise\Promise;
use MagDv\Cargomart\ApiException;
use MagDv\Cargomart\Configuration;
use MagDv\Cargomart\DebugPlugin;
use MagDv\Cargomart\HeaderSelector;
use MagDv\Cargomart\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use function sprintf;

/**
 * OrderStepBidApi Class Doc Comment
 *
 * @category Class
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderStepBidApi
{
    /**
     * @var PluginClient
     */
    protected $httpClient;

    /**
     * @var PluginClient
     */
    protected $httpAsyncClient;

    /**
     * @var UriFactoryInterface
     */
    protected $uriFactory;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @var RequestFactoryInterface
     */
    protected $requestFactory;

    /**
     * @var StreamFactoryInterface
     */
    protected $streamFactory;

    public function __construct(
        ?ClientInterface $httpClient = null,
        ?Configuration $config = null,
        ?HttpAsyncClient $httpAsyncClient = null,
        ?UriFactoryInterface $uriFactory = null,
        ?RequestFactoryInterface $requestFactory = null,
        ?StreamFactoryInterface $streamFactory = null,
        ?HeaderSelector $selector = null,
        ?array $plugins = null,
        $hostIndex = 0
    ) {
        $this->config = $config ?? (new Configuration())->setHost('https://cargomart.ru');
        $this->requestFactory = $requestFactory ?? Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactory = $streamFactory ?? Psr17FactoryDiscovery::findStreamFactory();

        $plugins = $plugins ?? [
            new RedirectPlugin(['strict' => true]),
            new ErrorPlugin(),
        ];

        if ($this->config->getDebug()) {
            $plugins[] = new DebugPlugin(fopen($this->config->getDebugFile(), 'ab'));
        }

        $this->httpClient = (new PluginClientFactory())->createClient(
            $httpClient ?? Psr18ClientDiscovery::find(),
            $plugins
        );

        $this->httpAsyncClient = (new PluginClientFactory())->createClient(
            $httpAsyncClient ?? HttpAsyncClientDiscovery::find(),
            $plugins
        );

        $this->uriFactory = $uriFactory ?? Psr17FactoryDiscovery::findUriFactory();

        $this->headerSelector = $selector ?? new HeaderSelector();

        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getOrderStepBid
     *
     * Получить шаг ставки по цене
     *
     * @param  string $price Цена для которой нужно рассчитать шаг ставки (required)
     * @param  string $currency_code Код валюты в которой указана цена (required)
     * @param  \MagDv\Cargomart\Dto\OrderDraftKind $kind Тип заказа (required)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MagDv\Cargomart\Dto\OrderStepBidResponse|object|object|object
     */
    public function getOrderStepBid($price, $currency_code, $kind)
    {
        list($response) = $this->getOrderStepBidWithHttpInfo($price, $currency_code, $kind);
        return $response;
    }

    /**
     * Operation getOrderStepBidWithHttpInfo
     *
     * Получить шаг ставки по цене
     *
     * @param  string $price Цена для которой нужно рассчитать шаг ставки (required)
     * @param  string $currency_code Код валюты в которой указана цена (required)
     * @param  \MagDv\Cargomart\Dto\OrderDraftKind $kind Тип заказа (required)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MagDv\Cargomart\Dto\OrderStepBidResponse|object|object|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderStepBidWithHttpInfo($price, $currency_code, $kind)
    {
        $request = $this->getOrderStepBidRequest($price, $currency_code, $kind);

        try {
            try {
                $response = $this->httpClient->sendRequest($request);
            } catch (HttpException $e) {
                $response = $e->getResponse();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $response->getStatusCode(),
                        (string) $request->getUri()
                    ),
                    $request,
                    $response,
                    $e
                );
            } catch (ClientExceptionInterface $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $request,
                    null,
                    $e
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    if ('\MagDv\Cargomart\Dto\OrderStepBidResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MagDv\Cargomart\Dto\OrderStepBidResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MagDv\Cargomart\Dto\OrderStepBidResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MagDv\Cargomart\Dto\OrderStepBidResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrderStepBidAsync
     *
     * Получить шаг ставки по цене
     *
     * @param  string $price Цена для которой нужно рассчитать шаг ставки (required)
     * @param  string $currency_code Код валюты в которой указана цена (required)
     * @param  \MagDv\Cargomart\Dto\OrderDraftKind $kind Тип заказа (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function getOrderStepBidAsync($price, $currency_code, $kind)
    {
        return $this->getOrderStepBidAsyncWithHttpInfo($price, $currency_code, $kind)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderStepBidAsyncWithHttpInfo
     *
     * Получить шаг ставки по цене
     *
     * @param  string $price Цена для которой нужно рассчитать шаг ставки (required)
     * @param  string $currency_code Код валюты в которой указана цена (required)
     * @param  \MagDv\Cargomart\Dto\OrderDraftKind $kind Тип заказа (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function getOrderStepBidAsyncWithHttpInfo($price, $currency_code, $kind)
    {
        $returnType = '\MagDv\Cargomart\Dto\OrderStepBidResponse';
        $request = $this->getOrderStepBidRequest($price, $currency_code, $kind);

        return $this->httpAsyncClient->sendAsyncRequest($request)
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function (HttpException $exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $exception->getRequest(),
                        $exception->getResponse(),
                        $exception
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOrderStepBid'
     *
     * @param  string $price Цена для которой нужно рассчитать шаг ставки (required)
     * @param  string $currency_code Код валюты в которой указана цена (required)
     * @param  \MagDv\Cargomart\Dto\OrderDraftKind $kind Тип заказа (required)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function getOrderStepBidRequest($price, $currency_code, $kind)
    {
        // verify the required parameter 'price' is set
        if ($price === null || (is_array($price) && count($price) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price when calling getOrderStepBid'
            );
        }
        // verify the required parameter 'currency_code' is set
        if ($currency_code === null || (is_array($currency_code) && count($currency_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency_code when calling getOrderStepBid'
            );
        }
        // verify the required parameter 'kind' is set
        if ($kind === null || (is_array($kind) && count($kind) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $kind when calling getOrderStepBid'
            );
        }

        $resourcePath = '/api/v2/order-step-bid';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;

        // query params
        if ($price !== null) {
            if('form' === 'form' && is_array($price)) {
                foreach($price as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['price'] = $price;
            }
        }
        // query params
        if ($currency_code !== null) {
            if('form' === 'form' && is_array($currency_code)) {
                foreach($currency_code as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['currencyCode'] = $currency_code;
            }
        }
        // query params
        if ($kind !== null) {
            if('form' === 'form' && is_array($kind)) {
                foreach($kind as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['kind'] = $kind;
            }
        }




        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            '',
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($this->headerSelector->isJsonMime($headers['Content-Type'])) {
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();

        $uri = $this->createUri($operationHost, $resourcePath, $queryParams);

        return $this->createRequest('GET', $uri, $headers, $httpBody);
    }


    /**
     * @param string $method
     * @param string|UriInterface $uri
     * @param array $headers
     * @param string|StreamInterface|null $body
     *
     * @return RequestInterface
     */
    protected function createRequest(string $method, $uri, array $headers = [], $body = null): RequestInterface
    {
        if ($this->requestFactory instanceof RequestFactory) {
            return $this->requestFactory->createRequest(
                $method,
                $uri,
                $headers,
                $body
            );
        }

        if (is_string($body) && '' !== $body && null === $this->streamFactory) {
            throw new \RuntimeException('Cannot create request: A stream factory is required to create a request with a non-empty string body.');
        }

        $request = $this->requestFactory->createRequest($method, $uri);

        foreach ($headers as $key => $value) {
            $request = $request->withHeader($key, $value);
        }

        if (null !== $body && '' !== $body) {
            $request = $request->withBody(
                is_string($body) ? $this->streamFactory->createStream($body) : $body
            );
        }

        return $request;
    }

    private function createUri(
        string $operationHost,
        string $resourcePath,
        array $queryParams
    ): UriInterface {
        $parsedUrl = parse_url($operationHost);

        $host = $parsedUrl['host'] ?? null;
        $scheme = $parsedUrl['scheme'] ?? null;
        $basePath = $parsedUrl['path'] ?? null;
        $port = $parsedUrl['port'] ?? null;
        $user = $parsedUrl['user'] ?? null;
        $password = $parsedUrl['pass'] ?? null;

        $uri = $this->uriFactory->createUri($basePath . $resourcePath)
            ->withHost($host)
            ->withScheme($scheme)
            ->withPort($port)
            ->withQuery(ObjectSerializer::buildQuery($queryParams));

        if ($user) {
            $uri = $uri->withUserInfo($user, $password);
        }

        return $uri;
    }
}
