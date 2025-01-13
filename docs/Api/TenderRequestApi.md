# MagDv\Cargomart\TenderRequestApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2TenderRequestGet()**](TenderRequestApi.md#apiV2TenderRequestGet) | **GET** /api/v2/tender/request | Получение списка тендеров в статусе запроса цены
[**apiV2TenderRequestLotGet()**](TenderRequestApi.md#apiV2TenderRequestLotGet) | **GET** /api/v2/tender/request/lot | Получение списка лотов по тендеру в статусе запроса цены
[**apiV2TenderRequestLotLotIdCompanyStatsGet()**](TenderRequestApi.md#apiV2TenderRequestLotLotIdCompanyStatsGet) | **GET** /api/v2/tender/request/lot/{lotId}/company-stats | Получить список компаний со статистикой по лоту
[**apiV2TenderRequestLotLotIdGet()**](TenderRequestApi.md#apiV2TenderRequestLotLotIdGet) | **GET** /api/v2/tender/request/lot/{lotId} | Получение лота по тендеру в статусе запроса цены
[**apiV2TenderRequestLotLotIdOfferDelete()**](TenderRequestApi.md#apiV2TenderRequestLotLotIdOfferDelete) | **DELETE** /api/v2/tender/request/lot/{lotId}/offer | Удаление отклика лота
[**apiV2TenderRequestLotLotIdOfferPost()**](TenderRequestApi.md#apiV2TenderRequestLotLotIdOfferPost) | **POST** /api/v2/tender/request/lot/{lotId}/offer | Разместить отклик на лот
[**apiV2TenderRequestLotLotIdProposalGet()**](TenderRequestApi.md#apiV2TenderRequestLotLotIdProposalGet) | **GET** /api/v2/tender/request/lot/{lotId}/proposal | Получить список предложений по лоту
[**apiV2TenderRequestTenderIdCancelPost()**](TenderRequestApi.md#apiV2TenderRequestTenderIdCancelPost) | **POST** /api/v2/tender/request/{tenderId}/cancel | Отмена тендера
[**apiV2TenderRequestTenderIdCompanyStatsGet()**](TenderRequestApi.md#apiV2TenderRequestTenderIdCompanyStatsGet) | **GET** /api/v2/tender/request/{tenderId}/company-stats | Получить список компаний со статистикой вовлеченности
[**apiV2TenderRequestTenderIdGet()**](TenderRequestApi.md#apiV2TenderRequestTenderIdGet) | **GET** /api/v2/tender/request/{tenderId} | Получение тендера в статусе запроса цены
[**apiV2TenderRequestTenderIdResultsGet()**](TenderRequestApi.md#apiV2TenderRequestTenderIdResultsGet) | **GET** /api/v2/tender/request/{tenderId}/results | Получить результаты приема заявок в формате xlsx


## `apiV2TenderRequestGet()`

```php
apiV2TenderRequestGet($filter_status, $order, $page, $per_page): \MagDv\Cargomart\Dto\TenderRequestListResponse
```

Получение списка тендеров в статусе запроса цены

Получение списка тендеров в статусе запроса цены

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\TenderRequestApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_status = array(56); // int[] | Фильтрация по статусу заказа
$order = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\TenderSortTypeEnum(); // \MagDv\Cargomart\Dto\TenderSortTypeEnum | Сортировка списка
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2TenderRequestGet($filter_status, $order, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderRequestApi->apiV2TenderRequestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_status** | [**int[]**](../Model/int.md)| Фильтрация по статусу заказа | [optional]
 **order** | [**\MagDv\Cargomart\Dto\TenderSortTypeEnum**](../Model/.md)| Сортировка списка | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\TenderRequestListResponse**](../Model/TenderRequestListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderRequestLotGet()`

```php
apiV2TenderRequestLotGet($filter_tender_id, $filter_status, $filter_with_offer, $order, $page, $per_page): \MagDv\Cargomart\Dto\TenderRequestLotListResponse
```

Получение списка лотов по тендеру в статусе запроса цены

Получение списка лотов по тендеру в статусе запроса цены

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\TenderRequestApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_tender_id = 'filter_tender_id_example'; // string | Идентификатор тендера в статусе \"Сбор предложений\".
$filter_status = array(56); // int[] | Фильтрация по статусу заказа
$filter_with_offer = false; // bool | Фильтрация по наличию предложения
$order = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\TenderSortTypeEnum(); // \MagDv\Cargomart\Dto\TenderSortTypeEnum | Сортировка списка
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2TenderRequestLotGet($filter_tender_id, $filter_status, $filter_with_offer, $order, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderRequestApi->apiV2TenderRequestLotGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_tender_id** | **string**| Идентификатор тендера в статусе \&quot;Сбор предложений\&quot;. |
 **filter_status** | [**int[]**](../Model/int.md)| Фильтрация по статусу заказа | [optional]
 **filter_with_offer** | **bool**| Фильтрация по наличию предложения | [optional] [default to false]
 **order** | [**\MagDv\Cargomart\Dto\TenderSortTypeEnum**](../Model/.md)| Сортировка списка | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\TenderRequestLotListResponse**](../Model/TenderRequestLotListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderRequestLotLotIdCompanyStatsGet()`

```php
apiV2TenderRequestLotLotIdCompanyStatsGet($lot_id, $filter_is_view, $filter_is_notify, $filter_is_offer, $page, $per_page): \MagDv\Cargomart\Dto\TenderCompanyStatListResponse
```

Получить список компаний со статистикой по лоту

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\TenderRequestApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$lot_id = 'lot_id_example'; // string | Идентификатор лота из тендера
$filter_is_view = True; // bool | Компания просматривала тендер/лоты тендера
$filter_is_notify = True; // bool | Компания получала оповещения по тендеру
$filter_is_offer = True; // bool | Компания делала предложение по тендеру
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2TenderRequestLotLotIdCompanyStatsGet($lot_id, $filter_is_view, $filter_is_notify, $filter_is_offer, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderRequestApi->apiV2TenderRequestLotLotIdCompanyStatsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lot_id** | **string**| Идентификатор лота из тендера |
 **filter_is_view** | **bool**| Компания просматривала тендер/лоты тендера | [optional]
 **filter_is_notify** | **bool**| Компания получала оповещения по тендеру | [optional]
 **filter_is_offer** | **bool**| Компания делала предложение по тендеру | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\TenderCompanyStatListResponse**](../Model/TenderCompanyStatListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderRequestLotLotIdGet()`

```php
apiV2TenderRequestLotLotIdGet($lot_id, $with): \MagDv\Cargomart\Dto\TenderRequestLotItemResponse
```

Получение лота по тендеру в статусе запроса цены

Получение лота по тендеру в статусе запроса цены

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\TenderRequestApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$lot_id = 'lot_id_example'; // string | Идентификатор лота в статусе \"Сбор предложений\".
$with = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\LotsAdditionalRelationsEnum()); // \MagDv\Cargomart\Dto\LotsAdditionalRelationsEnum[] | Массив доп данных.

try {
    $result = $apiInstance->apiV2TenderRequestLotLotIdGet($lot_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderRequestApi->apiV2TenderRequestLotLotIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lot_id** | **string**| Идентификатор лота в статусе \&quot;Сбор предложений\&quot;. |
 **with** | [**\MagDv\Cargomart\Dto\LotsAdditionalRelationsEnum[]**](../Model/\MagDv\Cargomart\Dto\LotsAdditionalRelationsEnum.md)| Массив доп данных. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\TenderRequestLotItemResponse**](../Model/TenderRequestLotItemResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderRequestLotLotIdOfferDelete()`

```php
apiV2TenderRequestLotLotIdOfferDelete($lot_id)
```

Удаление отклика лота

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\TenderRequestApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$lot_id = 'lot_id_example'; // string | Идентификатор лота из тендера.

try {
    $apiInstance->apiV2TenderRequestLotLotIdOfferDelete($lot_id);
} catch (Exception $e) {
    echo 'Exception when calling TenderRequestApi->apiV2TenderRequestLotLotIdOfferDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lot_id** | **string**| Идентификатор лота из тендера. |

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderRequestLotLotIdOfferPost()`

```php
apiV2TenderRequestLotLotIdOfferPost($lot_id, $lot_offer_push_request): \MagDv\Cargomart\Dto\TenderRequestLotOfferItemResponse
```

Разместить отклик на лот

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\TenderRequestApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$lot_id = 'lot_id_example'; // string | Идентификатор лота из тендера
$lot_offer_push_request = new \MagDv\Cargomart\Dto\LotOfferPushRequest(); // \MagDv\Cargomart\Dto\LotOfferPushRequest

try {
    $result = $apiInstance->apiV2TenderRequestLotLotIdOfferPost($lot_id, $lot_offer_push_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderRequestApi->apiV2TenderRequestLotLotIdOfferPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lot_id** | **string**| Идентификатор лота из тендера |
 **lot_offer_push_request** | [**\MagDv\Cargomart\Dto\LotOfferPushRequest**](../Model/LotOfferPushRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\TenderRequestLotOfferItemResponse**](../Model/TenderRequestLotOfferItemResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderRequestLotLotIdProposalGet()`

```php
apiV2TenderRequestLotLotIdProposalGet($lot_id): \MagDv\Cargomart\Dto\TenderRequestLotProposalListResponse
```

Получить список предложений по лоту

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\TenderRequestApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$lot_id = 'lot_id_example'; // string | Идентификатор лота из тендера

try {
    $result = $apiInstance->apiV2TenderRequestLotLotIdProposalGet($lot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderRequestApi->apiV2TenderRequestLotLotIdProposalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lot_id** | **string**| Идентификатор лота из тендера |

### Return type

[**\MagDv\Cargomart\Dto\TenderRequestLotProposalListResponse**](../Model/TenderRequestLotProposalListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderRequestTenderIdCancelPost()`

```php
apiV2TenderRequestTenderIdCancelPost($tender_id): \MagDv\Cargomart\Dto\TenderRequestItemResponse
```

Отмена тендера

Отмена тендера

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\TenderRequestApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$tender_id = 'tender_id_example'; // string | Идентификатор тендера.

try {
    $result = $apiInstance->apiV2TenderRequestTenderIdCancelPost($tender_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderRequestApi->apiV2TenderRequestTenderIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tender_id** | **string**| Идентификатор тендера. |

### Return type

[**\MagDv\Cargomart\Dto\TenderRequestItemResponse**](../Model/TenderRequestItemResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderRequestTenderIdCompanyStatsGet()`

```php
apiV2TenderRequestTenderIdCompanyStatsGet($tender_id, $filter_is_view, $filter_is_notify, $filter_is_offer, $page, $per_page): \MagDv\Cargomart\Dto\TenderCompanyStatListResponse
```

Получить список компаний со статистикой вовлеченности

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\TenderRequestApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$tender_id = 'tender_id_example'; // string | Идентификатор тендера.
$filter_is_view = True; // bool | Компания просматривала тендер/лоты тендера
$filter_is_notify = True; // bool | Компания получала оповещения по тендеру
$filter_is_offer = True; // bool | Компания делала предложение по тендеру
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2TenderRequestTenderIdCompanyStatsGet($tender_id, $filter_is_view, $filter_is_notify, $filter_is_offer, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderRequestApi->apiV2TenderRequestTenderIdCompanyStatsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tender_id** | **string**| Идентификатор тендера. |
 **filter_is_view** | **bool**| Компания просматривала тендер/лоты тендера | [optional]
 **filter_is_notify** | **bool**| Компания получала оповещения по тендеру | [optional]
 **filter_is_offer** | **bool**| Компания делала предложение по тендеру | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\TenderCompanyStatListResponse**](../Model/TenderCompanyStatListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderRequestTenderIdGet()`

```php
apiV2TenderRequestTenderIdGet($tender_id, $with): \MagDv\Cargomart\Dto\TenderRequestItemResponse
```

Получение тендера в статусе запроса цены

Получение тендера в статусе запроса цены

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\TenderRequestApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$tender_id = 'tender_id_example'; // string | Идентификатор тендера в статусе \"Сбор предложений\".
$with = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\RequestAdditionalRelationsEnum()); // \MagDv\Cargomart\Dto\RequestAdditionalRelationsEnum[] | Фильтр для подключения связанных сущностей

try {
    $result = $apiInstance->apiV2TenderRequestTenderIdGet($tender_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderRequestApi->apiV2TenderRequestTenderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tender_id** | **string**| Идентификатор тендера в статусе \&quot;Сбор предложений\&quot;. |
 **with** | [**\MagDv\Cargomart\Dto\RequestAdditionalRelationsEnum[]**](../Model/\MagDv\Cargomart\Dto\RequestAdditionalRelationsEnum.md)| Фильтр для подключения связанных сущностей | [optional]

### Return type

[**\MagDv\Cargomart\Dto\TenderRequestItemResponse**](../Model/TenderRequestItemResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderRequestTenderIdResultsGet()`

```php
apiV2TenderRequestTenderIdResultsGet($tender_id): \SplFileObject
```

Получить результаты приема заявок в формате xlsx

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\TenderRequestApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$tender_id = 'tender_id_example'; // string | Идентификатор тендера

try {
    $result = $apiInstance->apiV2TenderRequestTenderIdResultsGet($tender_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderRequestApi->apiV2TenderRequestTenderIdResultsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tender_id** | **string**| Идентификатор тендера |

### Return type

**\SplFileObject**

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
