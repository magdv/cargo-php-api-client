<?php
/**
 * ClaimApi
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
 * ClaimApi Class Doc Comment
 *
 * @category Class
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClaimApi
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
     * Operation apiV2ClaimGet
     *
     * Список требований на оплату
     *
     * @param  string $filter_claim_number Номер требования (optional)
     * @param  string $filter_serial_id Номер заявки (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimStatus[] $filter_status Статус требования (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimantType $filter_claimant Заявитель требования (optional)
     * @param  string $filter_carrier Хэш код компании перевозчика (optional)
     * @param  string $filter_consignor Хэш код компании заказчика (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimFilterTypeEnum $filter_type Тип требования (optional)
     * @param  string[] $sort Сортировка списка требований. Поддерживается сортировка по полю date. При наличии префикса \&quot;-\&quot; сортировка будет произведена в обратном порядке. (optional)
     * @param  int $per_page Количество элементов на страницу (optional, default to 20)
     * @param  int $page Номер страницы (optional, default to 1)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MagDv\Cargomart\Dto\ClaimListResponse
     */
    public function apiV2ClaimGet($filter_claim_number = null, $filter_serial_id = null, $filter_status = null, $filter_claimant = null, $filter_carrier = null, $filter_consignor = null, $filter_type = null, $sort = null, $per_page = 20, $page = 1)
    {
        list($response) = $this->apiV2ClaimGetWithHttpInfo($filter_claim_number, $filter_serial_id, $filter_status, $filter_claimant, $filter_carrier, $filter_consignor, $filter_type, $sort, $per_page, $page);
        return $response;
    }

    /**
     * Operation apiV2ClaimGetWithHttpInfo
     *
     * Список требований на оплату
     *
     * @param  string $filter_claim_number Номер требования (optional)
     * @param  string $filter_serial_id Номер заявки (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimStatus[] $filter_status Статус требования (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimantType $filter_claimant Заявитель требования (optional)
     * @param  string $filter_carrier Хэш код компании перевозчика (optional)
     * @param  string $filter_consignor Хэш код компании заказчика (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimFilterTypeEnum $filter_type Тип требования (optional)
     * @param  string[] $sort Сортировка списка требований. Поддерживается сортировка по полю date. При наличии префикса \&quot;-\&quot; сортировка будет произведена в обратном порядке. (optional)
     * @param  int $per_page Количество элементов на страницу (optional, default to 20)
     * @param  int $page Номер страницы (optional, default to 1)
     *
     * @throws \MagDv\Cargomart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MagDv\Cargomart\Dto\ClaimListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2ClaimGetWithHttpInfo($filter_claim_number = null, $filter_serial_id = null, $filter_status = null, $filter_claimant = null, $filter_carrier = null, $filter_consignor = null, $filter_type = null, $sort = null, $per_page = 20, $page = 1)
    {
        $request = $this->apiV2ClaimGetRequest($filter_claim_number, $filter_serial_id, $filter_status, $filter_claimant, $filter_carrier, $filter_consignor, $filter_type, $sort, $per_page, $page);

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
                    if ('\MagDv\Cargomart\Dto\ClaimListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MagDv\Cargomart\Dto\ClaimListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MagDv\Cargomart\Dto\ClaimListResponse';
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
                        '\MagDv\Cargomart\Dto\ClaimListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2ClaimGetAsync
     *
     * Список требований на оплату
     *
     * @param  string $filter_claim_number Номер требования (optional)
     * @param  string $filter_serial_id Номер заявки (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimStatus[] $filter_status Статус требования (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimantType $filter_claimant Заявитель требования (optional)
     * @param  string $filter_carrier Хэш код компании перевозчика (optional)
     * @param  string $filter_consignor Хэш код компании заказчика (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimFilterTypeEnum $filter_type Тип требования (optional)
     * @param  string[] $sort Сортировка списка требований. Поддерживается сортировка по полю date. При наличии префикса \&quot;-\&quot; сортировка будет произведена в обратном порядке. (optional)
     * @param  int $per_page Количество элементов на страницу (optional, default to 20)
     * @param  int $page Номер страницы (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2ClaimGetAsync($filter_claim_number = null, $filter_serial_id = null, $filter_status = null, $filter_claimant = null, $filter_carrier = null, $filter_consignor = null, $filter_type = null, $sort = null, $per_page = 20, $page = 1)
    {
        return $this->apiV2ClaimGetAsyncWithHttpInfo($filter_claim_number, $filter_serial_id, $filter_status, $filter_claimant, $filter_carrier, $filter_consignor, $filter_type, $sort, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2ClaimGetAsyncWithHttpInfo
     *
     * Список требований на оплату
     *
     * @param  string $filter_claim_number Номер требования (optional)
     * @param  string $filter_serial_id Номер заявки (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimStatus[] $filter_status Статус требования (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimantType $filter_claimant Заявитель требования (optional)
     * @param  string $filter_carrier Хэш код компании перевозчика (optional)
     * @param  string $filter_consignor Хэш код компании заказчика (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimFilterTypeEnum $filter_type Тип требования (optional)
     * @param  string[] $sort Сортировка списка требований. Поддерживается сортировка по полю date. При наличии префикса \&quot;-\&quot; сортировка будет произведена в обратном порядке. (optional)
     * @param  int $per_page Количество элементов на страницу (optional, default to 20)
     * @param  int $page Номер страницы (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function apiV2ClaimGetAsyncWithHttpInfo($filter_claim_number = null, $filter_serial_id = null, $filter_status = null, $filter_claimant = null, $filter_carrier = null, $filter_consignor = null, $filter_type = null, $sort = null, $per_page = 20, $page = 1)
    {
        $returnType = '\MagDv\Cargomart\Dto\ClaimListResponse';
        $request = $this->apiV2ClaimGetRequest($filter_claim_number, $filter_serial_id, $filter_status, $filter_claimant, $filter_carrier, $filter_consignor, $filter_type, $sort, $per_page, $page);

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
     * Create request for operation 'apiV2ClaimGet'
     *
     * @param  string $filter_claim_number Номер требования (optional)
     * @param  string $filter_serial_id Номер заявки (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimStatus[] $filter_status Статус требования (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimantType $filter_claimant Заявитель требования (optional)
     * @param  string $filter_carrier Хэш код компании перевозчика (optional)
     * @param  string $filter_consignor Хэш код компании заказчика (optional)
     * @param  \MagDv\Cargomart\Dto\ClaimFilterTypeEnum $filter_type Тип требования (optional)
     * @param  string[] $sort Сортировка списка требований. Поддерживается сортировка по полю date. При наличии префикса \&quot;-\&quot; сортировка будет произведена в обратном порядке. (optional)
     * @param  int $per_page Количество элементов на страницу (optional, default to 20)
     * @param  int $page Номер страницы (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function apiV2ClaimGetRequest($filter_claim_number = null, $filter_serial_id = null, $filter_status = null, $filter_claimant = null, $filter_carrier = null, $filter_consignor = null, $filter_type = null, $sort = null, $per_page = 20, $page = 1)
    {

        $resourcePath = '/api/v2/claim';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;

        // query params
        if ($filter_claim_number !== null) {
            if('form' === 'form' && is_array($filter_claim_number)) {
                foreach($filter_claim_number as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[claimNumber]'] = $filter_claim_number;
            }
        }
        // query params
        if ($filter_serial_id !== null) {
            if('form' === 'form' && is_array($filter_serial_id)) {
                foreach($filter_serial_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[serialId]'] = $filter_serial_id;
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
                $queryParams['filter[status][]'] = $filter_status;
            }
        }
        // query params
        if ($filter_claimant !== null) {
            if('form' === 'form' && is_array($filter_claimant)) {
                foreach($filter_claimant as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[claimant]'] = $filter_claimant;
            }
        }
        // query params
        if ($filter_carrier !== null) {
            if('form' === 'form' && is_array($filter_carrier)) {
                foreach($filter_carrier as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[carrier]'] = $filter_carrier;
            }
        }
        // query params
        if ($filter_consignor !== null) {
            if('form' === 'form' && is_array($filter_consignor)) {
                foreach($filter_consignor as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[consignor]'] = $filter_consignor;
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
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sort[]'] = $sort;
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
