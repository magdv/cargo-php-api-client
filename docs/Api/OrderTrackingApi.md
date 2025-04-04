# MagDv\Cargomart\OrderTrackingApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2TrackingCountGet()**](OrderTrackingApi.md#apiV2TrackingCountGet) | **GET** /api/v2/tracking/count | Получения количества отслеживаний.
[**apiV2TrackingGet()**](OrderTrackingApi.md#apiV2TrackingGet) | **GET** /api/v2/tracking | Получения списка текущего отслеживания заказов.


## `apiV2TrackingCountGet()`

```php
apiV2TrackingCountGet(): \MagDv\Cargomart\Dto\TrackingCountResponse
```

Получения количества отслеживаний.

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


$apiInstance = new MagDv\Cargomart\Api\OrderTrackingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2TrackingCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTrackingApi->apiV2TrackingCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\TrackingCountResponse**](../Model/TrackingCountResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TrackingGet()`

```php
apiV2TrackingGet($with, $page, $per_page): \MagDv\Cargomart\Dto\TrackingList
```

Получения списка текущего отслеживания заказов.

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


$apiInstance = new MagDv\Cargomart\Api\OrderTrackingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$with = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum()); // \MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum[] | Фильтр with - locality
$page = 56; // int | Номер страницы для постраничной навигации
$per_page = 56; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2TrackingGet($with, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTrackingApi->apiV2TrackingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**\MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\OrderTrackingAdditionalDataTypeEnum.md)| Фильтр with - locality | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional]
 **per_page** | **int**| Количество элементов на страницу | [optional]

### Return type

[**\MagDv\Cargomart\Dto\TrackingList**](../Model/TrackingList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
