# MagDv\Cargomart\OrderUtilsApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderAcCompanyGet()**](OrderUtilsApi.md#apiV2OrderAcCompanyGet) | **GET** /api/v2/order/ac/company | Поиск по данным контактов точек маршрута текущего клиента.
[**apiV2OrderAcDriverNameGet()**](OrderUtilsApi.md#apiV2OrderAcDriverNameGet) | **GET** /api/v2/order/ac/driver-name | Поиск водителей по имени, с которыми ранее работал клиент
[**apiV2OrderAcTagGet()**](OrderUtilsApi.md#apiV2OrderAcTagGet) | **GET** /api/v2/order/ac/tag | Поиск по тегам клиента.
[**apiV2OrderAcWorkerGet()**](OrderUtilsApi.md#apiV2OrderAcWorkerGet) | **GET** /api/v2/order/ac/worker | Поиск контактов для автокомплита при создании заказа


## `apiV2OrderAcCompanyGet()`

```php
apiV2OrderAcCompanyGet($filter_search, $filter_type, $filter_is_blocked, $filter_is_partner, $selected_ids, $page, $per_page): \MagDv\Cargomart\Dto\OrderClientAccessListResponse
```

Поиск по данным контактов точек маршрута текущего клиента.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderUtilsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\AcClientTypeEnum(); // \MagDv\Cargomart\Dto\AcClientTypeEnum | carrier, consignor
$filter_is_blocked = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\FilterIntegerBooleanEnum(); // \MagDv\Cargomart\Dto\FilterIntegerBooleanEnum | Искать в том числе и среди заблокированных
$filter_is_partner = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\FilterIntegerBooleanEnum(); // \MagDv\Cargomart\Dto\FilterIntegerBooleanEnum | Искать только среди партнеров
$selected_ids = array('selected_ids_example'); // string[] | Отсортировать компании по hash (на первое место)
$page = 56; // int | Страница выдачи.
$per_page = 56; // int | лимит выдачи.

try {
    $result = $apiInstance->apiV2OrderAcCompanyGet($filter_search, $filter_type, $filter_is_blocked, $filter_is_partner, $selected_ids, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUtilsApi->apiV2OrderAcCompanyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка |
 **filter_type** | [**\MagDv\Cargomart\Dto\AcClientTypeEnum**](../Model/.md)| carrier, consignor |
 **filter_is_blocked** | [**\MagDv\Cargomart\Dto\FilterIntegerBooleanEnum**](../Model/.md)| Искать в том числе и среди заблокированных | [optional]
 **filter_is_partner** | [**\MagDv\Cargomart\Dto\FilterIntegerBooleanEnum**](../Model/.md)| Искать только среди партнеров | [optional]
 **selected_ids** | [**string[]**](../Model/string.md)| Отсортировать компании по hash (на первое место) | [optional]
 **page** | **int**| Страница выдачи. | [optional]
 **per_page** | **int**| лимит выдачи. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderClientAccessListResponse**](../Model/OrderClientAccessListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderAcDriverNameGet()`

```php
apiV2OrderAcDriverNameGet($filter_search, $page, $per_page): \MagDv\Cargomart\Dto\AcDriverNameResponse
```

Поиск водителей по имени, с которыми ранее работал клиент

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


$apiInstance = new MagDv\Cargomart\Api\OrderUtilsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$page = 56; // int | Страница выдачи
$per_page = 56; // int | Количество объектов на странице

try {
    $result = $apiInstance->apiV2OrderAcDriverNameGet($filter_search, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUtilsApi->apiV2OrderAcDriverNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка | [optional]
 **page** | **int**| Страница выдачи | [optional]
 **per_page** | **int**| Количество объектов на странице | [optional]

### Return type

[**\MagDv\Cargomart\Dto\AcDriverNameResponse**](../Model/AcDriverNameResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderAcTagGet()`

```php
apiV2OrderAcTagGet($filter_search, $page, $per_page): \MagDv\Cargomart\Dto\AcTagResponse
```

Поиск по тегам клиента.

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


$apiInstance = new MagDv\Cargomart\Api\OrderUtilsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$page = 56; // int | Страница выдачи.
$per_page = 56; // int | лимит выдачи.

try {
    $result = $apiInstance->apiV2OrderAcTagGet($filter_search, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUtilsApi->apiV2OrderAcTagGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка | [optional]
 **page** | **int**| Страница выдачи. | [optional]
 **per_page** | **int**| лимит выдачи. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\AcTagResponse**](../Model/AcTagResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderAcWorkerGet()`

```php
apiV2OrderAcWorkerGet($filter_search, $filter_blocked_status, $selected_ids, $page, $per_page): \MagDv\Cargomart\Dto\AcWorkerResponse
```

Поиск контактов для автокомплита при создании заказа

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


$apiInstance = new MagDv\Cargomart\Api\OrderUtilsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$filter_blocked_status = 'filter_blocked_status_example'; // string | Фильтрация по статусу
$selected_ids = array(56); // int[] | Дополнительные id для поиска (на первое место)
$page = 56; // int | Страница выдачи
$per_page = 56; // int | Количество объектов на странице

try {
    $result = $apiInstance->apiV2OrderAcWorkerGet($filter_search, $filter_blocked_status, $selected_ids, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUtilsApi->apiV2OrderAcWorkerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка | [optional]
 **filter_blocked_status** | **string**| Фильтрация по статусу | [optional]
 **selected_ids** | [**int[]**](../Model/int.md)| Дополнительные id для поиска (на первое место) | [optional]
 **page** | **int**| Страница выдачи | [optional]
 **per_page** | **int**| Количество объектов на странице | [optional]

### Return type

[**\MagDv\Cargomart\Dto\AcWorkerResponse**](../Model/AcWorkerResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
