# MagDv\Cargomart\ExpeditorDraftApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderDraftExpeditorConditionsGet()**](ExpeditorDraftApi.md#apiV2OrderDraftExpeditorConditionsGet) | **GET** /api/v2/order-draft-expeditor/conditions | Получить условия перевозки
[**apiV2OrderDraftExpeditorDraftIdDelete()**](ExpeditorDraftApi.md#apiV2OrderDraftExpeditorDraftIdDelete) | **DELETE** /api/v2/order-draft-expeditor/{draftId} | Пометить черновик заказа удалённым
[**apiV2OrderDraftExpeditorDraftIdGet()**](ExpeditorDraftApi.md#apiV2OrderDraftExpeditorDraftIdGet) | **GET** /api/v2/order-draft-expeditor/{draftId} | Просмотр черновика заказа
[**apiV2OrderDraftExpeditorDraftIdPublishPost()**](ExpeditorDraftApi.md#apiV2OrderDraftExpeditorDraftIdPublishPost) | **POST** /api/v2/order-draft-expeditor/{draftId}/publish | Публикация черновика заказа.
[**apiV2OrderDraftExpeditorDraftIdPut()**](ExpeditorDraftApi.md#apiV2OrderDraftExpeditorDraftIdPut) | **PUT** /api/v2/order-draft-expeditor/{draftId} | Редактирование черновика заказа
[**apiV2OrderDraftExpeditorPost()**](ExpeditorDraftApi.md#apiV2OrderDraftExpeditorPost) | **POST** /api/v2/order-draft-expeditor | Создать черновик заказа
[**apiV2OrderDraftExpeditorPriceGet()**](ExpeditorDraftApi.md#apiV2OrderDraftExpeditorPriceGet) | **GET** /api/v2/order-draft-expeditor/price | Получить цену по маршруту
[**apiV2OrderDraftExpeditorPriceV2Get()**](ExpeditorDraftApi.md#apiV2OrderDraftExpeditorPriceV2Get) | **GET** /api/v2/order-draft-expeditor/price-v2 | Получить цену по маршруту


## `apiV2OrderDraftExpeditorConditionsGet()`

```php
apiV2OrderDraftExpeditorConditionsGet($route_points, $storage_point_ids, $company_branch_id): \MagDv\Cargomart\Dto\OrderDraftExpeditorConditionsResponse
```

Получить условия перевозки

Получить условия перевозки

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$route_points = array('route_points_example'); // string[] | Список КЛАДР кодов пунктов
$storage_point_ids = array(56); // int[] | Список id пунктов погрузки
$company_branch_id = 56; // int | Идентификатор дочерней компании

try {
    $result = $apiInstance->apiV2OrderDraftExpeditorConditionsGet($route_points, $storage_point_ids, $company_branch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorDraftApi->apiV2OrderDraftExpeditorConditionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_points** | [**string[]**](../Model/string.md)| Список КЛАДР кодов пунктов |
 **storage_point_ids** | [**int[]**](../Model/int.md)| Список id пунктов погрузки | [optional]
 **company_branch_id** | **int**| Идентификатор дочерней компании | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftExpeditorConditionsResponse**](../Model/OrderDraftExpeditorConditionsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftExpeditorDraftIdDelete()`

```php
apiV2OrderDraftExpeditorDraftIdDelete($draft_id)
```

Пометить черновик заказа удалённым

Пометить черновик заказа удалённым

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика заказа

try {
    $apiInstance->apiV2OrderDraftExpeditorDraftIdDelete($draft_id);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorDraftApi->apiV2OrderDraftExpeditorDraftIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика заказа |

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

## `apiV2OrderDraftExpeditorDraftIdGet()`

```php
apiV2OrderDraftExpeditorDraftIdGet($draft_id): \MagDv\Cargomart\Dto\OrderDraftExpeditorCruResponse
```

Просмотр черновика заказа

Просмотр черновика заказа

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика заказа

try {
    $result = $apiInstance->apiV2OrderDraftExpeditorDraftIdGet($draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorDraftApi->apiV2OrderDraftExpeditorDraftIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика заказа |

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftExpeditorCruResponse**](../Model/OrderDraftExpeditorCruResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftExpeditorDraftIdPublishPost()`

```php
apiV2OrderDraftExpeditorDraftIdPublishPost($draft_id, $order_draft_expeditor_update_request): \MagDv\Cargomart\Dto\OrderDraftExpeditorCruResponse
```

Публикация черновика заказа.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика.
$order_draft_expeditor_update_request = new \MagDv\Cargomart\Dto\OrderDraftExpeditorUpdateRequest(); // \MagDv\Cargomart\Dto\OrderDraftExpeditorUpdateRequest

try {
    $result = $apiInstance->apiV2OrderDraftExpeditorDraftIdPublishPost($draft_id, $order_draft_expeditor_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorDraftApi->apiV2OrderDraftExpeditorDraftIdPublishPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика. |
 **order_draft_expeditor_update_request** | [**\MagDv\Cargomart\Dto\OrderDraftExpeditorUpdateRequest**](../Model/OrderDraftExpeditorUpdateRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftExpeditorCruResponse**](../Model/OrderDraftExpeditorCruResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftExpeditorDraftIdPut()`

```php
apiV2OrderDraftExpeditorDraftIdPut($draft_id, $order_draft_expeditor_update_request): \MagDv\Cargomart\Dto\OrderDraftExpeditorCruResponse
```

Редактирование черновика заказа

Редактирование черновика заказа

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика заказа
$order_draft_expeditor_update_request = new \MagDv\Cargomart\Dto\OrderDraftExpeditorUpdateRequest(); // \MagDv\Cargomart\Dto\OrderDraftExpeditorUpdateRequest

try {
    $result = $apiInstance->apiV2OrderDraftExpeditorDraftIdPut($draft_id, $order_draft_expeditor_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorDraftApi->apiV2OrderDraftExpeditorDraftIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика заказа |
 **order_draft_expeditor_update_request** | [**\MagDv\Cargomart\Dto\OrderDraftExpeditorUpdateRequest**](../Model/OrderDraftExpeditorUpdateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftExpeditorCruResponse**](../Model/OrderDraftExpeditorCruResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftExpeditorPost()`

```php
apiV2OrderDraftExpeditorPost($order_draft_expeditor_update_request): \MagDv\Cargomart\Dto\OrderDraftExpeditorCruResponse
```

Создать черновик заказа

Создать черновик заказа

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_draft_expeditor_update_request = new \MagDv\Cargomart\Dto\OrderDraftExpeditorUpdateRequest(); // \MagDv\Cargomart\Dto\OrderDraftExpeditorUpdateRequest

try {
    $result = $apiInstance->apiV2OrderDraftExpeditorPost($order_draft_expeditor_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorDraftApi->apiV2OrderDraftExpeditorPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_draft_expeditor_update_request** | [**\MagDv\Cargomart\Dto\OrderDraftExpeditorUpdateRequest**](../Model/OrderDraftExpeditorUpdateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftExpeditorCruResponse**](../Model/OrderDraftExpeditorCruResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftExpeditorPriceGet()`

```php
apiV2OrderDraftExpeditorPriceGet($truck_type_id, $route_points, $storage_point_ids, $loading_point_from_date, $loading_point_from_time, $unloading_point_from_date, $unloading_point_from_time, $company_branch_id, $load_weight, $load_capacity, $vat_rate): \MagDv\Cargomart\Dto\OrderDraftExpeditorPriceResponse
```

Получить цену по маршруту

Получить цену по маршруту

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$truck_type_id = 56; // int | Тип грузовика
$route_points = array('route_points_example'); // string[] | Список КЛАДР кодов пунктов
$storage_point_ids = array(56); // int[] | Список идентификаторов пунктов погрузки
$loading_point_from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата работы на пункте погрузки. YYYY-MM-DD
$loading_point_from_time = 'loading_point_from_time_example'; // string | Время работы ОТ на пункте погрузки. HH:mm::ss
$unloading_point_from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата работы на пункте выгрузки. YYYY-MM-DD
$unloading_point_from_time = 'unloading_point_from_time_example'; // string | Время работы ОТ на пункте выгрузки. HH:mm::ss
$company_branch_id = 56; // int | Идентификатор дочерней компании
$load_weight = 3.4; // float | Вес груза(в тоннах)
$load_capacity = 56; // int | Объём груза(в м3)
$vat_rate = 3.4; // float | Ставка НДС

try {
    $result = $apiInstance->apiV2OrderDraftExpeditorPriceGet($truck_type_id, $route_points, $storage_point_ids, $loading_point_from_date, $loading_point_from_time, $unloading_point_from_date, $unloading_point_from_time, $company_branch_id, $load_weight, $load_capacity, $vat_rate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorDraftApi->apiV2OrderDraftExpeditorPriceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **truck_type_id** | **int**| Тип грузовика |
 **route_points** | [**string[]**](../Model/string.md)| Список КЛАДР кодов пунктов | [optional]
 **storage_point_ids** | [**int[]**](../Model/int.md)| Список идентификаторов пунктов погрузки | [optional]
 **loading_point_from_date** | **\DateTime**| Дата работы на пункте погрузки. YYYY-MM-DD | [optional]
 **loading_point_from_time** | **string**| Время работы ОТ на пункте погрузки. HH:mm::ss | [optional]
 **unloading_point_from_date** | **\DateTime**| Дата работы на пункте выгрузки. YYYY-MM-DD | [optional]
 **unloading_point_from_time** | **string**| Время работы ОТ на пункте выгрузки. HH:mm::ss | [optional]
 **company_branch_id** | **int**| Идентификатор дочерней компании | [optional]
 **load_weight** | **float**| Вес груза(в тоннах) | [optional]
 **load_capacity** | **int**| Объём груза(в м3) | [optional]
 **vat_rate** | **float**| Ставка НДС | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftExpeditorPriceResponse**](../Model/OrderDraftExpeditorPriceResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderDraftExpeditorPriceV2Get()`

```php
apiV2OrderDraftExpeditorPriceV2Get($truck_type_id, $route_points, $storage_point_ids, $loading_point_from_date, $loading_point_from_time, $unloading_point_from_date, $unloading_point_from_time, $company_branch_id, $cargo_weight, $cargo_capacity, $load_weight, $load_capacity, $vat_rate): \MagDv\Cargomart\Dto\OrderDraftExpeditorPriceV2Response
```

Получить цену по маршруту

Получить цену по маршруту

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$truck_type_id = 56; // int | Тип грузовика
$route_points = array('route_points_example'); // string[] | Список КЛАДР кодов пунктов
$storage_point_ids = array(56); // int[] | Список идентификаторов пунктов погрузки
$loading_point_from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата работы на пункте погрузки. YYYY-MM-DD
$loading_point_from_time = 'loading_point_from_time_example'; // string | Время работы ОТ на пункте погрузки. HH:mm::ss
$unloading_point_from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата работы на пункте выгрузки. YYYY-MM-DD
$unloading_point_from_time = 'unloading_point_from_time_example'; // string | Время работы ОТ на пункте выгрузки. HH:mm::ss
$company_branch_id = 56; // int | Идентификатор дочерней компании
$cargo_weight = 3.4; // float | Тоннаж авто из условий заказа(в тоннах)
$cargo_capacity = 56; // int | Кубатура авто из условий заказа(в м3)
$load_weight = 3.4; // float | Вес груза(в тоннах)
$load_capacity = 56; // int | Объём груза(в м3)
$vat_rate = 3.4; // float | Ставка НДС

try {
    $result = $apiInstance->apiV2OrderDraftExpeditorPriceV2Get($truck_type_id, $route_points, $storage_point_ids, $loading_point_from_date, $loading_point_from_time, $unloading_point_from_date, $unloading_point_from_time, $company_branch_id, $cargo_weight, $cargo_capacity, $load_weight, $load_capacity, $vat_rate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorDraftApi->apiV2OrderDraftExpeditorPriceV2Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **truck_type_id** | **int**| Тип грузовика |
 **route_points** | [**string[]**](../Model/string.md)| Список КЛАДР кодов пунктов | [optional]
 **storage_point_ids** | [**int[]**](../Model/int.md)| Список идентификаторов пунктов погрузки | [optional]
 **loading_point_from_date** | **\DateTime**| Дата работы на пункте погрузки. YYYY-MM-DD | [optional]
 **loading_point_from_time** | **string**| Время работы ОТ на пункте погрузки. HH:mm::ss | [optional]
 **unloading_point_from_date** | **\DateTime**| Дата работы на пункте выгрузки. YYYY-MM-DD | [optional]
 **unloading_point_from_time** | **string**| Время работы ОТ на пункте выгрузки. HH:mm::ss | [optional]
 **company_branch_id** | **int**| Идентификатор дочерней компании | [optional]
 **cargo_weight** | **float**| Тоннаж авто из условий заказа(в тоннах) | [optional]
 **cargo_capacity** | **int**| Кубатура авто из условий заказа(в м3) | [optional]
 **load_weight** | **float**| Вес груза(в тоннах) | [optional]
 **load_capacity** | **int**| Объём груза(в м3) | [optional]
 **vat_rate** | **float**| Ставка НДС | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDraftExpeditorPriceV2Response**](../Model/OrderDraftExpeditorPriceV2Response.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
