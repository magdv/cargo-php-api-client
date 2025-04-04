<?php
/**
 * OrderCommentApi
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
 * OrderCommentApi Class Doc Comment
 *
 * @category Class
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderCommentApi
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
     * Operation apiV2OrderOrderIdCommentGet
     *
     * Метод возвращает список комментариев по заказу.
     *
     * @param  string $order_id Идентификатор заказа (required)
     * @param  int $page Пагинация списка документов. (optional)
     * @param  int $per_page Количество элементов на странице. (optional)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MagDv\Cargomart\Dto\CommentListResponse
     */
    public function apiV2OrderOrderIdCommentGet($order_id, $page = null, $per_page = null)
    {
        list($response) = $this->apiV2OrderOrderIdCommentGetWithHttpInfo($order_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation apiV2OrderOrderIdCommentGetWithHttpInfo
     *
     * Метод возвращает список комментариев по заказу.
     *
     * @param  string $order_id Идентификатор заказа (required)
     * @param  int $page Пагинация списка документов. (optional)
     * @param  int $per_page Количество элементов на странице. (optional)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MagDv\Cargomart\Dto\CommentListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2OrderOrderIdCommentGetWithHttpInfo($order_id, $page = null, $per_page = null)
    {
        $request = $this->apiV2OrderOrderIdCommentGetRequest($order_id, $page, $per_page);

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
                    if ('\MagDv\Cargomart\Dto\CommentListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MagDv\Cargomart\Dto\CommentListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MagDv\Cargomart\Dto\CommentListResponse';
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
                        '\MagDv\Cargomart\Dto\CommentListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2OrderOrderIdCommentGetAsync
     *
     * Метод возвращает список комментариев по заказу.
     *
     * @param  string $order_id Идентификатор заказа (required)
     * @param  int $page Пагинация списка документов. (optional)
     * @param  int $per_page Количество элементов на странице. (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2OrderOrderIdCommentGetAsync($order_id, $page = null, $per_page = null)
    {
        return $this->apiV2OrderOrderIdCommentGetAsyncWithHttpInfo($order_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2OrderOrderIdCommentGetAsyncWithHttpInfo
     *
     * Метод возвращает список комментариев по заказу.
     *
     * @param  string $order_id Идентификатор заказа (required)
     * @param  int $page Пагинация списка документов. (optional)
     * @param  int $per_page Количество элементов на странице. (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2OrderOrderIdCommentGetAsyncWithHttpInfo($order_id, $page = null, $per_page = null)
    {
        $returnType = '\MagDv\Cargomart\Dto\CommentListResponse';
        $request = $this->apiV2OrderOrderIdCommentGetRequest($order_id, $page, $per_page);

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
     * Create request for operation 'apiV2OrderOrderIdCommentGet'
     *
     * @param  string $order_id Идентификатор заказа (required)
     * @param  int $page Пагинация списка документов. (optional)
     * @param  int $per_page Количество элементов на странице. (optional)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function apiV2OrderOrderIdCommentGetRequest($order_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling apiV2OrderOrderIdCommentGet'
            );
        }

        $resourcePath = '/api/v2/order/{orderId}/comment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;

        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($per_page !== null) {
            if('form' === 'form' && is_array($per_page)) {
                foreach($per_page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['perPage'] = $per_page;
            }
        }


        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('token');
        if ($apiKey !== null) {
            
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation apiV2OrderOrderIdCommentPost
     *
     * Создание комментария
     *
     * @param  string $order_id Идентификатор заказа (required)
     * @param  \MagDv\Cargomart\Dto\OrderCommentRequest $order_comment_request order_comment_request (required)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MagDv\Cargomart\Dto\CommentResponse
     */
    public function apiV2OrderOrderIdCommentPost($order_id, $order_comment_request)
    {
        list($response) = $this->apiV2OrderOrderIdCommentPostWithHttpInfo($order_id, $order_comment_request);
        return $response;
    }

    /**
     * Operation apiV2OrderOrderIdCommentPostWithHttpInfo
     *
     * Создание комментария
     *
     * @param  string $order_id Идентификатор заказа (required)
     * @param  \MagDv\Cargomart\Dto\OrderCommentRequest $order_comment_request (required)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MagDv\Cargomart\Dto\CommentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2OrderOrderIdCommentPostWithHttpInfo($order_id, $order_comment_request)
    {
        $request = $this->apiV2OrderOrderIdCommentPostRequest($order_id, $order_comment_request);

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
                    if ('\MagDv\Cargomart\Dto\CommentResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MagDv\Cargomart\Dto\CommentResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MagDv\Cargomart\Dto\CommentResponse';
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
                        '\MagDv\Cargomart\Dto\CommentResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2OrderOrderIdCommentPostAsync
     *
     * Создание комментария
     *
     * @param  string $order_id Идентификатор заказа (required)
     * @param  \MagDv\Cargomart\Dto\OrderCommentRequest $order_comment_request (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2OrderOrderIdCommentPostAsync($order_id, $order_comment_request)
    {
        return $this->apiV2OrderOrderIdCommentPostAsyncWithHttpInfo($order_id, $order_comment_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2OrderOrderIdCommentPostAsyncWithHttpInfo
     *
     * Создание комментария
     *
     * @param  string $order_id Идентификатор заказа (required)
     * @param  \MagDv\Cargomart\Dto\OrderCommentRequest $order_comment_request (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2OrderOrderIdCommentPostAsyncWithHttpInfo($order_id, $order_comment_request)
    {
        $returnType = '\MagDv\Cargomart\Dto\CommentResponse';
        $request = $this->apiV2OrderOrderIdCommentPostRequest($order_id, $order_comment_request);

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
     * Create request for operation 'apiV2OrderOrderIdCommentPost'
     *
     * @param  string $order_id Идентификатор заказа (required)
     * @param  \MagDv\Cargomart\Dto\OrderCommentRequest $order_comment_request (required)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function apiV2OrderOrderIdCommentPostRequest($order_id, $order_comment_request)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling apiV2OrderOrderIdCommentPost'
            );
        }
        // verify the required parameter 'order_comment_request' is set
        if ($order_comment_request === null || (is_array($order_comment_request) && count($order_comment_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_comment_request when calling apiV2OrderOrderIdCommentPost'
            );
        }

        $resourcePath = '/api/v2/order/{orderId}/comment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;



        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            'application/json',
            $multipart
        );

        // for model (json/xml)
        if (isset($order_comment_request)) {
            if ($this->headerSelector->isJsonMime($headers['Content-Type'])) {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($order_comment_request));
            } else {
                $httpBody = $order_comment_request;
            }
        } elseif (count($formParams) > 0) {
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('token');
        if ($apiKey !== null) {
            
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        return $this->createRequest('POST', $uri, $headers, $httpBody);
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
