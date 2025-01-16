# MagDv\Cargomart\OrderStepBidApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderStepBid()**](OrderStepBidApi.md#getOrderStepBid) | **GET** /api/v2/order-step-bid | Получить шаг ставки по цене


## `getOrderStepBid()`

```php
getOrderStepBid($price, $currency_code, $kind): \MagDv\Cargomart\Dto\OrderStepBidResponse
```

Получить шаг ставки по цене

Получить шаг ставки по цене

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


$apiInstance = new MagDv\Cargomart\Api\OrderStepBidApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$price = 'price_example'; // string | Цена для которой нужно рассчитать шаг ставки
$currency_code = 'currency_code_example'; // string | Код валюты в которой указана цена
$kind = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\OrderDraftKind(); // \MagDv\Cargomart\Dto\OrderDraftKind | Тип заказа

try {
    $result = $apiInstance->getOrderStepBid($price, $currency_code, $kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStepBidApi->getOrderStepBid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price** | **string**| Цена для которой нужно рассчитать шаг ставки |
 **currency_code** | **string**| Код валюты в которой указана цена |
 **kind** | [**\MagDv\Cargomart\Dto\OrderDraftKind**](../Model/.md)| Тип заказа |

### Return type

[**\MagDv\Cargomart\Dto\OrderStepBidResponse**](../Model/OrderStepBidResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
