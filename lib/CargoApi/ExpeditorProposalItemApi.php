<?php
/**
 * ExpeditorProposalItemApi
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
 * ExpeditorProposalItemApi Class Doc Comment
 *
 * @category Class
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExpeditorProposalItemApi
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
     * Operation apiV2ExpeditorEcnGet
     *
     * Получение списка ЭТрН
     *
     * @param  int $filter_index_from Индекс пункта откуда. (optional)
     * @param  int $filter_index_to Индекс пункта куда. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnType $filter_type Тип ТРН. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnStatusGroup $filter_status_group Обобщенный статус ТРН. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnStatus $filter_status Статус ТРН. (optional)
     * @param  int $page Номер страницы для постраничной навигации (optional, default to 1)
     * @param  int $per_page Количество элементов на страницу (optional, default to 20)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MagDv\Cargomart\Dto\OrderEcnListResponse
     */
    public function apiV2ExpeditorEcnGet($filter_index_from = null, $filter_index_to = null, $filter_type = null, $filter_status_group = null, $filter_status = null, $page = 1, $per_page = 20)
    {
        list($response) = $this->apiV2ExpeditorEcnGetWithHttpInfo($filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $page, $per_page);
        return $response;
    }

    /**
     * Operation apiV2ExpeditorEcnGetWithHttpInfo
     *
     * Получение списка ЭТрН
     *
     * @param  int $filter_index_from Индекс пункта откуда. (optional)
     * @param  int $filter_index_to Индекс пункта куда. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnType $filter_type Тип ТРН. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnStatusGroup $filter_status_group Обобщенный статус ТРН. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnStatus $filter_status Статус ТРН. (optional)
     * @param  int $page Номер страницы для постраничной навигации (optional, default to 1)
     * @param  int $per_page Количество элементов на страницу (optional, default to 20)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MagDv\Cargomart\Dto\OrderEcnListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2ExpeditorEcnGetWithHttpInfo($filter_index_from = null, $filter_index_to = null, $filter_type = null, $filter_status_group = null, $filter_status = null, $page = 1, $per_page = 20)
    {
        $request = $this->apiV2ExpeditorEcnGetRequest($filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $page, $per_page);

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
                    if ('\MagDv\Cargomart\Dto\OrderEcnListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MagDv\Cargomart\Dto\OrderEcnListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MagDv\Cargomart\Dto\OrderEcnListResponse';
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
                        '\MagDv\Cargomart\Dto\OrderEcnListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2ExpeditorEcnGetAsync
     *
     * Получение списка ЭТрН
     *
     * @param  int $filter_index_from Индекс пункта откуда. (optional)
     * @param  int $filter_index_to Индекс пункта куда. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnType $filter_type Тип ТРН. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnStatusGroup $filter_status_group Обобщенный статус ТРН. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnStatus $filter_status Статус ТРН. (optional)
     * @param  int $page Номер страницы для постраничной навигации (optional, default to 1)
     * @param  int $per_page Количество элементов на страницу (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2ExpeditorEcnGetAsync($filter_index_from = null, $filter_index_to = null, $filter_type = null, $filter_status_group = null, $filter_status = null, $page = 1, $per_page = 20)
    {
        return $this->apiV2ExpeditorEcnGetAsyncWithHttpInfo($filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2ExpeditorEcnGetAsyncWithHttpInfo
     *
     * Получение списка ЭТрН
     *
     * @param  int $filter_index_from Индекс пункта откуда. (optional)
     * @param  int $filter_index_to Индекс пункта куда. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnType $filter_type Тип ТРН. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnStatusGroup $filter_status_group Обобщенный статус ТРН. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnStatus $filter_status Статус ТРН. (optional)
     * @param  int $page Номер страницы для постраничной навигации (optional, default to 1)
     * @param  int $per_page Количество элементов на страницу (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2ExpeditorEcnGetAsyncWithHttpInfo($filter_index_from = null, $filter_index_to = null, $filter_type = null, $filter_status_group = null, $filter_status = null, $page = 1, $per_page = 20)
    {
        $returnType = '\MagDv\Cargomart\Dto\OrderEcnListResponse';
        $request = $this->apiV2ExpeditorEcnGetRequest($filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $page, $per_page);

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
     * Create request for operation 'apiV2ExpeditorEcnGet'
     *
     * @param  int $filter_index_from Индекс пункта откуда. (optional)
     * @param  int $filter_index_to Индекс пункта куда. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnType $filter_type Тип ТРН. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnStatusGroup $filter_status_group Обобщенный статус ТРН. (optional)
     * @param  \MagDv\Cargomart\Dto\EcnStatus $filter_status Статус ТРН. (optional)
     * @param  int $page Номер страницы для постраничной навигации (optional, default to 1)
     * @param  int $per_page Количество элементов на страницу (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function apiV2ExpeditorEcnGetRequest($filter_index_from = null, $filter_index_to = null, $filter_type = null, $filter_status_group = null, $filter_status = null, $page = 1, $per_page = 20)
    {

        $resourcePath = '/api/v2/expeditor-ecn';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;

        // query params
        if ($filter_index_from !== null) {
            if('form' === 'form' && is_array($filter_index_from)) {
                foreach($filter_index_from as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[indexFrom]'] = $filter_index_from;
            }
        }
        // query params
        if ($filter_index_to !== null) {
            if('form' === 'form' && is_array($filter_index_to)) {
                foreach($filter_index_to as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[indexTo]'] = $filter_index_to;
            }
        }
        // query params
        if ($filter_type !== null) {
            if('form' === 'form' && is_array($filter_type)) {
                foreach($filter_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[type]'] = $filter_type;
            }
        }
        // query params
        if ($filter_status_group !== null) {
            if('form' === 'form' && is_array($filter_status_group)) {
                foreach($filter_status_group as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[statusGroup]'] = $filter_status_group;
            }
        }
        // query params
        if ($filter_status !== null) {
            if('form' === 'form' && is_array($filter_status)) {
                foreach($filter_status as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[status]'] = $filter_status;
            }
        }
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
     * Operation apiV2ExpeditorProposalIdDenyBankingDetailsPost
     *
     * Пометить банковские реквизиты ошибочными.
     *
     * @param  string $id Идентификатор заказа Экспедитора. (required)
     * @param  \MagDv\Cargomart\Dto\DenyBankingDetailsRequest $deny_banking_details_request deny_banking_details_request (optional)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV2ExpeditorProposalIdDenyBankingDetailsPost($id, $deny_banking_details_request = null)
    {
        $this->apiV2ExpeditorProposalIdDenyBankingDetailsPostWithHttpInfo($id, $deny_banking_details_request);
    }

    /**
     * Operation apiV2ExpeditorProposalIdDenyBankingDetailsPostWithHttpInfo
     *
     * Пометить банковские реквизиты ошибочными.
     *
     * @param  string $id Идентификатор заказа Экспедитора. (required)
     * @param  \MagDv\Cargomart\Dto\DenyBankingDetailsRequest $deny_banking_details_request (optional)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2ExpeditorProposalIdDenyBankingDetailsPostWithHttpInfo($id, $deny_banking_details_request = null)
    {
        $request = $this->apiV2ExpeditorProposalIdDenyBankingDetailsPostRequest($id, $deny_banking_details_request);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2ExpeditorProposalIdDenyBankingDetailsPostAsync
     *
     * Пометить банковские реквизиты ошибочными.
     *
     * @param  string $id Идентификатор заказа Экспедитора. (required)
     * @param  \MagDv\Cargomart\Dto\DenyBankingDetailsRequest $deny_banking_details_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2ExpeditorProposalIdDenyBankingDetailsPostAsync($id, $deny_banking_details_request = null)
    {
        return $this->apiV2ExpeditorProposalIdDenyBankingDetailsPostAsyncWithHttpInfo($id, $deny_banking_details_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2ExpeditorProposalIdDenyBankingDetailsPostAsyncWithHttpInfo
     *
     * Пометить банковские реквизиты ошибочными.
     *
     * @param  string $id Идентификатор заказа Экспедитора. (required)
     * @param  \MagDv\Cargomart\Dto\DenyBankingDetailsRequest $deny_banking_details_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2ExpeditorProposalIdDenyBankingDetailsPostAsyncWithHttpInfo($id, $deny_banking_details_request = null)
    {
        $returnType = '';
        $request = $this->apiV2ExpeditorProposalIdDenyBankingDetailsPostRequest($id, $deny_banking_details_request);

        return $this->httpAsyncClient->sendAsyncRequest($request)
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'apiV2ExpeditorProposalIdDenyBankingDetailsPost'
     *
     * @param  string $id Идентификатор заказа Экспедитора. (required)
     * @param  \MagDv\Cargomart\Dto\DenyBankingDetailsRequest $deny_banking_details_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function apiV2ExpeditorProposalIdDenyBankingDetailsPostRequest($id, $deny_banking_details_request = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling apiV2ExpeditorProposalIdDenyBankingDetailsPost'
            );
        }

        $resourcePath = '/api/v2/expeditor-proposal/{id}/deny-banking-details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            'application/json',
            $multipart
        );

        // for model (json/xml)
        if (isset($deny_banking_details_request)) {
            if ($this->headerSelector->isJsonMime($headers['Content-Type'])) {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($deny_banking_details_request));
            } else {
                $httpBody = $deny_banking_details_request;
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
     * Operation apiV2ExpeditorProposalIdGet
     *
     * Получение информации для карточки заказа Экспедитора.
     *
     * @param  string $id Идентификатор заказа Экспедитора. (required)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MagDv\Cargomart\Dto\ProposalCardResponse
     */
    public function apiV2ExpeditorProposalIdGet($id)
    {
        list($response) = $this->apiV2ExpeditorProposalIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation apiV2ExpeditorProposalIdGetWithHttpInfo
     *
     * Получение информации для карточки заказа Экспедитора.
     *
     * @param  string $id Идентификатор заказа Экспедитора. (required)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MagDv\Cargomart\Dto\ProposalCardResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2ExpeditorProposalIdGetWithHttpInfo($id)
    {
        $request = $this->apiV2ExpeditorProposalIdGetRequest($id);

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
                    if ('\MagDv\Cargomart\Dto\ProposalCardResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MagDv\Cargomart\Dto\ProposalCardResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MagDv\Cargomart\Dto\ProposalCardResponse';
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
                        '\MagDv\Cargomart\Dto\ProposalCardResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2ExpeditorProposalIdGetAsync
     *
     * Получение информации для карточки заказа Экспедитора.
     *
     * @param  string $id Идентификатор заказа Экспедитора. (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2ExpeditorProposalIdGetAsync($id)
    {
        return $this->apiV2ExpeditorProposalIdGetAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2ExpeditorProposalIdGetAsyncWithHttpInfo
     *
     * Получение информации для карточки заказа Экспедитора.
     *
     * @param  string $id Идентификатор заказа Экспедитора. (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2ExpeditorProposalIdGetAsyncWithHttpInfo($id)
    {
        $returnType = '\MagDv\Cargomart\Dto\ProposalCardResponse';
        $request = $this->apiV2ExpeditorProposalIdGetRequest($id);

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
     * Create request for operation 'apiV2ExpeditorProposalIdGet'
     *
     * @param  string $id Идентификатор заказа Экспедитора. (required)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function apiV2ExpeditorProposalIdGetRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling apiV2ExpeditorProposalIdGet'
            );
        }

        $resourcePath = '/api/v2/expeditor-proposal/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
