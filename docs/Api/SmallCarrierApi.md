# MagDv\Cargomart\SmallCarrierApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderSearchTruckGet()**](SmallCarrierApi.md#apiV2OrderSearchTruckGet) | **GET** /api/v2/order-search/truck | Получение списка машин и критериев поиска для них по заказам
[**apiV2OrderSearchTruckTruckIdDelete()**](SmallCarrierApi.md#apiV2OrderSearchTruckTruckIdDelete) | **DELETE** /api/v2/order-search/truck/{truckId} | Удаление критерия поиска
[**apiV2OrderSearchTruckTruckIdPut()**](SmallCarrierApi.md#apiV2OrderSearchTruckTruckIdPut) | **PUT** /api/v2/order-search/truck/{truckId} | Создание/редактирование критерия поиска машины
[**apiV2TruckOrderQueueTruckIdGet()**](SmallCarrierApi.md#apiV2TruckOrderQueueTruckIdGet) | **GET** /api/v2/truck-order-queue/{truckId} | Получение списка заказов в очереди и в рейсе для выбранной машины
[**apiV2TruckOrderSearchTruckIdGet()**](SmallCarrierApi.md#apiV2TruckOrderSearchTruckIdGet) | **GET** /api/v2/truck-order-search/{truckId} | Найти заказы подходящие для выбранной машины по ранее созданным криитериям


## `apiV2OrderSearchTruckGet()`

```php
apiV2OrderSearchTruckGet(): \MagDv\Cargomart\Dto\OrderSearchCriteriaListResponse
```

Получение списка машин и критериев поиска для них по заказам

Получение списка машин и критериев поиска для них по заказам

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


$apiInstance = new MagDv\Cargomart\Api\SmallCarrierApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2OrderSearchTruckGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallCarrierApi->apiV2OrderSearchTruckGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\OrderSearchCriteriaListResponse**](../Model/OrderSearchCriteriaListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderSearchTruckTruckIdDelete()`

```php
apiV2OrderSearchTruckTruckIdDelete($truck_id)
```

Удаление критерия поиска

Удаление критерия поиска

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


$apiInstance = new MagDv\Cargomart\Api\SmallCarrierApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$truck_id = 56; // int | Идентификатор машины.

try {
    $apiInstance->apiV2OrderSearchTruckTruckIdDelete($truck_id);
} catch (Exception $e) {
    echo 'Exception when calling SmallCarrierApi->apiV2OrderSearchTruckTruckIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **truck_id** | **int**| Идентификатор машины. |

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

## `apiV2OrderSearchTruckTruckIdPut()`

```php
apiV2OrderSearchTruckTruckIdPut($truck_id, $order_search_update_criteria_request): \MagDv\Cargomart\Dto\OrderSearchCriteriaResponse
```

Создание/редактирование критерия поиска машины

Создание/редактирование критерия поиска машины

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


$apiInstance = new MagDv\Cargomart\Api\SmallCarrierApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$truck_id = 56; // int | Идентификатор машины.
$order_search_update_criteria_request = new \MagDv\Cargomart\Dto\OrderSearchUpdateCriteriaRequest(); // \MagDv\Cargomart\Dto\OrderSearchUpdateCriteriaRequest

try {
    $result = $apiInstance->apiV2OrderSearchTruckTruckIdPut($truck_id, $order_search_update_criteria_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallCarrierApi->apiV2OrderSearchTruckTruckIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **truck_id** | **int**| Идентификатор машины. |
 **order_search_update_criteria_request** | [**\MagDv\Cargomart\Dto\OrderSearchUpdateCriteriaRequest**](../Model/OrderSearchUpdateCriteriaRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderSearchCriteriaResponse**](../Model/OrderSearchCriteriaResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TruckOrderQueueTruckIdGet()`

```php
apiV2TruckOrderQueueTruckIdGet($truck_id, $filter_order, $page, $per_page): \MagDv\Cargomart\Dto\OrderListResponse
```

Получение списка заказов в очереди и в рейсе для выбранной машины

Получение списка заказов в очереди и в рейсе для выбранной машины

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


$apiInstance = new MagDv\Cargomart\Api\SmallCarrierApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$truck_id = 56; // int | Идентификатор машины.
$filter_order = array('filter_order_example'); // string[] | Массив id заказов
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2TruckOrderQueueTruckIdGet($truck_id, $filter_order, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallCarrierApi->apiV2TruckOrderQueueTruckIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **truck_id** | **int**| Идентификатор машины. |
 **filter_order** | [**string[]**](../Model/string.md)| Массив id заказов | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TruckOrderSearchTruckIdGet()`

```php
apiV2TruckOrderSearchTruckIdGet($truck_id, $filter_kind, $filter_order, $page, $per_page): \MagDv\Cargomart\Dto\OrderListResponse
```

Найти заказы подходящие для выбранной машины по ранее созданным криитериям

Найти заказы подходящие для выбранной машины по ранее созданным криитериям

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


$apiInstance = new MagDv\Cargomart\Api\SmallCarrierApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$truck_id = 56; // int | Идентификатор машины.
$filter_kind = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderTruckOrderSearchFilterKindEnum()); // \MagDv\Cargomart\Dto\OrderTruckOrderSearchFilterKindEnum[] | Тип заказа.
$filter_order = array('filter_order_example'); // string[] | Массив id заказов
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2TruckOrderSearchTruckIdGet($truck_id, $filter_kind, $filter_order, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmallCarrierApi->apiV2TruckOrderSearchTruckIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **truck_id** | **int**| Идентификатор машины. |
 **filter_kind** | [**\MagDv\Cargomart\Dto\OrderTruckOrderSearchFilterKindEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderTruckOrderSearchFilterKindEnum.md)| Тип заказа. | [optional]
 **filter_order** | [**string[]**](../Model/string.md)| Массив id заказов | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
