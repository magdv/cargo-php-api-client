# MagDv\Cargomart\OrderPublishApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderPublishPost()**](OrderPublishApi.md#apiV2OrderPublishPost) | **POST** /api/v2/order/publish | Публикация заказа


## `apiV2OrderPublishPost()`

```php
apiV2OrderPublishPost($order_publish_request_data): \MagDv\Cargomart\Dto\OrderCardResponse
```

Публикация заказа

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


$apiInstance = new MagDv\Cargomart\Api\OrderPublishApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_publish_request_data = new \MagDv\Cargomart\Dto\OrderPublishRequestData(); // \MagDv\Cargomart\Dto\OrderPublishRequestData

try {
    $result = $apiInstance->apiV2OrderPublishPost($order_publish_request_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPublishApi->apiV2OrderPublishPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_publish_request_data** | [**\MagDv\Cargomart\Dto\OrderPublishRequestData**](../Model/OrderPublishRequestData.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
