# MagDv\Cargomart\ExpeditorPaymentApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderOrderIdExpeditorPaymentGet()**](ExpeditorPaymentApi.md#apiV2OrderOrderIdExpeditorPaymentGet) | **GET** /api/v2/order/{orderId}/expeditor-payment | Получения списка оплат


## `apiV2OrderOrderIdExpeditorPaymentGet()`

```php
apiV2OrderOrderIdExpeditorPaymentGet($order_id): \MagDv\Cargomart\Dto\ExpeditorPaymentResponse
```

Получения списка оплат

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorPaymentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа

try {
    $result = $apiInstance->apiV2OrderOrderIdExpeditorPaymentGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorPaymentApi->apiV2OrderOrderIdExpeditorPaymentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorPaymentResponse**](../Model/ExpeditorPaymentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
