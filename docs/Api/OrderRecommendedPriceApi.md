# MagDv\Cargomart\OrderRecommendedPriceApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderRecommendedPriceGet()**](OrderRecommendedPriceApi.md#apiV2OrderRecommendedPriceGet) | **GET** /api/v2/order-recommended-price | Получить рекомендованную цену по маршруту


## `apiV2OrderRecommendedPriceGet()`

```php
apiV2OrderRecommendedPriceGet($company_branch_id, $truck_type_id, $kind, $route_points, $currency_code): \MagDv\Cargomart\Dto\OrderRecommendedPriceResponse
```

Получить рекомендованную цену по маршруту

Получить рекомендованную цену по маршруту

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


$apiInstance = new MagDv\Cargomart\Api\OrderRecommendedPriceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$company_branch_id = 56; // int | Идентификатор дочерней компании заказчика
$truck_type_id = 56; // int | Тип грузовика
$kind = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderDraftKind(); // \MagDv\Cargomart\Dto\OrderDraftKind | Тип заказа.
$route_points = array('route_points_example'); // string[] | Список КЛАДР кодов пунктов маршрута
$currency_code = 'currency_code_example'; // string | Код валюты

try {
    $result = $apiInstance->apiV2OrderRecommendedPriceGet($company_branch_id, $truck_type_id, $kind, $route_points, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderRecommendedPriceApi->apiV2OrderRecommendedPriceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_branch_id** | **int**| Идентификатор дочерней компании заказчика |
 **truck_type_id** | **int**| Тип грузовика |
 **kind** | [**\MagDv\Cargomart\Dto\OrderDraftKind**](../Model/.md)| Тип заказа. |
 **route_points** | [**string[]**](../Model/string.md)| Список КЛАДР кодов пунктов маршрута |
 **currency_code** | **string**| Код валюты | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderRecommendedPriceResponse**](../Model/OrderRecommendedPriceResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
