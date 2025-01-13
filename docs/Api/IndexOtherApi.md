# MagDv\Cargomart\IndexOtherApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2StatsPriceStatGet()**](IndexOtherApi.md#apiV2StatsPriceStatGet) | **GET** /api/v2/stats/price-stat | Получить цену по маршруту


## `apiV2StatsPriceStatGet()`

```php
apiV2StatsPriceStatGet($storage_point_ids, $loading_point_from_date, $loading_point_to_date, $truck_type_id): \MagDv\Cargomart\Dto\PriceStatResponse
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


$apiInstance = new MagDv\Cargomart\Api\IndexOtherApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$storage_point_ids = array(56); // int[] | Маршрут в виде списка идентификаторов пунктов погрузки
$loading_point_from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ОТ. YYYY-MM-DD. По умолчанию 14 дней назад.
$loading_point_to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ДО. YYYY-MM-DD. По умолчанию сегодня.
$truck_type_id = 56; // int | Тип кузова(например:4-рефрижератор,5-тент,10-изотерм)

try {
    $result = $apiInstance->apiV2StatsPriceStatGet($storage_point_ids, $loading_point_from_date, $loading_point_to_date, $truck_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndexOtherApi->apiV2StatsPriceStatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_point_ids** | [**int[]**](../Model/int.md)| Маршрут в виде списка идентификаторов пунктов погрузки |
 **loading_point_from_date** | **\DateTime**| Дата погрузки ОТ. YYYY-MM-DD. По умолчанию 14 дней назад. | [optional]
 **loading_point_to_date** | **\DateTime**| Дата погрузки ДО. YYYY-MM-DD. По умолчанию сегодня. | [optional]
 **truck_type_id** | **int**| Тип кузова(например:4-рефрижератор,5-тент,10-изотерм) | [optional]

### Return type

[**\MagDv\Cargomart\Dto\PriceStatResponse**](../Model/PriceStatResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
