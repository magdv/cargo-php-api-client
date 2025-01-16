# MagDv\Cargomart\DictionaryApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2DictionaryAcContainerTypeGet()**](DictionaryApi.md#apiV2DictionaryAcContainerTypeGet) | **GET** /api/v2/dictionary/ac/container-type | Список видов тары.
[**apiV2DictionaryAcCountryGet()**](DictionaryApi.md#apiV2DictionaryAcCountryGet) | **GET** /api/v2/dictionary/ac/country | Список стран
[**apiV2DictionaryExpeditorBranchGet()**](DictionaryApi.md#apiV2DictionaryExpeditorBranchGet) | **GET** /api/v2/dictionary/expeditor-branch | Вывод списка филиалов.
[**apiV2DictionaryGet()**](DictionaryApi.md#apiV2DictionaryGet) | **GET** /api/v2/dictionary | Метод возвращает список словарей
[**apiV2OrderRefuseReasonGet()**](DictionaryApi.md#apiV2OrderRefuseReasonGet) | **GET** /api/v2/order-refuse-reason | Словарь причин для отказа
[**apiV2PriceTypeGet()**](DictionaryApi.md#apiV2PriceTypeGet) | **GET** /api/v2/price-type | Словарь тип цены


## `apiV2DictionaryAcContainerTypeGet()`

```php
apiV2DictionaryAcContainerTypeGet($filter_search, $selected_ids, $page, $per_page): \MagDv\Cargomart\Dto\ContainerTypeList
```

Список видов тары.

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


$apiInstance = new MagDv\Cargomart\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$selected_ids = array('selected_ids_example'); // string[] | Дополнительные id для поиска (на первое место)
$page = 56; // int | Страница выдачи
$per_page = 56; // int | Количество объектов на странице

try {
    $result = $apiInstance->apiV2DictionaryAcContainerTypeGet($filter_search, $selected_ids, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->apiV2DictionaryAcContainerTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка | [optional]
 **selected_ids** | [**string[]**](../Model/string.md)| Дополнительные id для поиска (на первое место) | [optional]
 **page** | **int**| Страница выдачи | [optional]
 **per_page** | **int**| Количество объектов на странице | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ContainerTypeList**](../Model/ContainerTypeList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DictionaryAcCountryGet()`

```php
apiV2DictionaryAcCountryGet($filter_search, $selected_ids, $page, $per_page): \MagDv\Cargomart\Dto\CountryListResponse
```

Список стран

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


$apiInstance = new MagDv\Cargomart\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$selected_ids = array('selected_ids_example'); // string[] | Дополнительные id для поиска (на первое место)
$page = 56; // int | Страница выдачи
$per_page = 56; // int | Количество объектов на странице

try {
    $result = $apiInstance->apiV2DictionaryAcCountryGet($filter_search, $selected_ids, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->apiV2DictionaryAcCountryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка | [optional]
 **selected_ids** | [**string[]**](../Model/string.md)| Дополнительные id для поиска (на первое место) | [optional]
 **page** | **int**| Страница выдачи | [optional]
 **per_page** | **int**| Количество объектов на странице | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CountryListResponse**](../Model/CountryListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DictionaryExpeditorBranchGet()`

```php
apiV2DictionaryExpeditorBranchGet(): \MagDv\Cargomart\Dto\BranchList
```

Вывод списка филиалов.

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


$apiInstance = new MagDv\Cargomart\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2DictionaryExpeditorBranchGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->apiV2DictionaryExpeditorBranchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\BranchList**](../Model/BranchList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DictionaryGet()`

```php
apiV2DictionaryGet($with): \MagDv\Cargomart\Dto\DictionaryList
```

Метод возвращает список словарей

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


$apiInstance = new MagDv\Cargomart\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$with = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\DictionaryTypeEnum()); // \MagDv\Cargomart\Dto\DictionaryTypeEnum[] | Идентификатор справочника

try {
    $result = $apiInstance->apiV2DictionaryGet($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->apiV2DictionaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**\MagDv\Cargomart\Dto\DictionaryTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\DictionaryTypeEnum.md)| Идентификатор справочника | [optional]

### Return type

[**\MagDv\Cargomart\Dto\DictionaryList**](../Model/DictionaryList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderRefuseReasonGet()`

```php
apiV2OrderRefuseReasonGet(): \MagDv\Cargomart\Dto\OrderRefuseReasonsResponse
```

Словарь причин для отказа

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


$apiInstance = new MagDv\Cargomart\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2OrderRefuseReasonGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->apiV2OrderRefuseReasonGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\OrderRefuseReasonsResponse**](../Model/OrderRefuseReasonsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2PriceTypeGet()`

```php
apiV2PriceTypeGet(): \MagDv\Cargomart\Dto\OrderPriceTypeResponse
```

Словарь тип цены

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


$apiInstance = new MagDv\Cargomart\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2PriceTypeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->apiV2PriceTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\OrderPriceTypeResponse**](../Model/OrderPriceTypeResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
